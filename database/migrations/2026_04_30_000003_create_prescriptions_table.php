<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Recetas médicas que el comprador adjunta a un pedido cuando el carrito
     * contiene productos con `requires_prescription = true`.
     *
     * Estados:
     *   - `pending_validation`: recibida, esperando al farmacéutico.
     *   - `approved`: validada por farmacéutico colegiado, el pedido puede continuar a `paid`.
     *   - `rejected`: rechazada (faltan datos / receta vencida / receta no legible / sustancia no autorizada).
     *   - `expired`: TTL vencido sin validación → pedido se cancela.
     */
    public function up(): void
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_profile_id')->constrained('profiles')->onDelete('cascade')
                ->comment('Perfil del comprador / paciente que sube la receta.');
            $table->foreignId('order_id')->nullable()
                ->constrained('orders')
                ->nullOnDelete()
                ->comment('Pedido al que se vincula.');
            $table->foreignId('commerce_id')->nullable()
                ->constrained('commerces')
                ->nullOnDelete()
                ->comment('Farmacia despachadora (validar receta solo desde el farmacéutico de esa farmacia).');

            $table->string('prescribing_doctor_name');
            $table->string('prescribing_doctor_license')->nullable()
                ->comment('Número MPPS / matrícula del médico prescriptor.');
            $table->string('prescribing_doctor_specialty')->nullable();
            $table->date('issued_at')->nullable()
                ->comment('Fecha en la que el médico emitió la receta.');

            $table->string('image_url')
                ->comment('Imagen / PDF de la receta (almacenado cifrado).');
            $table->enum('prescription_type', ['common', 'retained', 'special'])->default('common');
            $table->enum('status', ['pending_validation', 'approved', 'rejected', 'expired'])
                ->default('pending_validation');

            $table->foreignId('validated_by_profile_id')->nullable()
                ->constrained('profiles')
                ->nullOnDelete()
                ->comment('Profile.id del farmacéutico colegiado que validó.');
            $table->timestamp('validated_at')->nullable();
            $table->text('rejection_reason')->nullable();
            $table->timestamp('expires_at')->nullable()
                ->comment('TTL de validación (default ZONIX_PHARMA_PRESCRIPTION_VALIDATION_TTL_MINUTES).');

            $table->timestamps();

            $table->index(['commerce_id', 'status'], 'prescriptions_commerce_status_index');
            $table->index(['patient_profile_id', 'created_at'], 'prescriptions_patient_created_index');
            $table->index(['status', 'validated_at'], 'prescriptions_status_validated_index');
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('prescription_id')
                ->references('id')
                ->on('prescriptions')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        $isSqlite = Schema::getConnection()->getDriverName() === 'sqlite';

        if (! $isSqlite && Schema::hasColumn('orders', 'prescription_id')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropForeign(['prescription_id']);
            });
        }

        Schema::dropIfExists('prescriptions');
    }
};
