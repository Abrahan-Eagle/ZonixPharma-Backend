<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Crea tabla `commerces` (farmacias / droguerías / boticarios para Zonix Pharma).
     * Mantiene el nombre `commerces` para no romper FKs existentes en delivery,
     * orders, posts, reviews, etc.
     *
     * Atributos farmacéuticos:
     *   - `pharmacist_in_charge_profile_id` → farmacéutico responsable colegiado
     *     (rol `pharmacist` con datos en `pharmacist_profiles`).
     *   - `health_permit_number` / `health_permit_expires_at` → permiso sanitario
     *     del establecimiento (MPPS / sanidad municipal).
     *   - `night_shift_open` → marca farmacia 24h o de turno.
     */
    public function up(): void
    {
        Schema::create('commerces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->boolean('is_primary')->default(true)
                ->comment('Si un perfil tiene varias farmacias, indica la principal.');
            $table->string('business_name')->nullable();
            $table->string('business_type')->nullable();
            $table->unsignedBigInteger('business_type_id')->nullable();
            $table->string('tax_id')->nullable()
                ->comment('RIF / RUC / NIT del establecimiento (requerido en VE).');
            $table->text('image')->nullable();
            $table->text('address')->nullable();

            $table->enum('status', ['pending_review', 'approved', 'rejected', 'suspended'])->default('pending_review');
            $table->text('rejection_reason')->nullable();
            $table->boolean('open')->default(false);
            $table->json('schedule')->nullable();
            $table->boolean('night_shift_open')->default(false)
                ->comment('Farmacia 24h o de turno; útil para filtros de búsqueda en madrugada.');

            // Membresía y comisión (modelo de negocio Zonix)
            $table->enum('membership_type', ['basic', 'premium', 'enterprise'])->nullable();
            $table->decimal('membership_monthly_fee', 10, 2)->default(0);
            $table->timestamp('membership_expires_at')->nullable();
            $table->decimal('commission_percentage', 5, 2)->default(0);
            $table->integer('cancellation_count')->default(0);
            $table->timestamp('last_cancellation_date')->nullable();
            $table->integer('preparation_time')->nullable()
                ->comment('Tiempo medio de despacho en minutos (medicina lista en mostrador / a entregar).');

            // Datos farmacéuticos del establecimiento
            $table->foreignId('pharmacist_in_charge_profile_id')->nullable()
                ->constrained('profiles')
                ->nullOnDelete()
                ->comment('Profile.id del farmacéutico responsable colegiado.');
            $table->string('health_permit_number')->nullable()
                ->comment('Número del permiso sanitario MPPS / municipal.');
            $table->date('health_permit_expires_at')->nullable();

            $table->timestamps();

            $table->index('night_shift_open', 'commerces_night_shift_open_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Quitar FK desde phones.commerce_id antes de dropear commerces
        if (Schema::hasTable('phones')) {
            Schema::table('phones', function (Blueprint $table) {
                if (DB::getDriverName() !== 'sqlite') {
                    try {
                        $table->dropForeign(['commerce_id']);
                    } catch (\Throwable $e) {
                        // Si la FK ya no existe, continuar sin fallar el rollback
                    }
                }
            });
        }

        Schema::dropIfExists('commerces');
    }
};
