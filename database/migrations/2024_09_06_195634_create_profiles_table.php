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
     * Crea tabla profiles con todos los campos consolidados de migraciones "add".
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            $table->string('firstName');
            $table->string('middleName')->nullable();
            $table->string('lastName');
            $table->string('secondLastName')->nullable();
            $table->string('photo_users')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('maritalStatus', ['married', 'divorced', 'single', 'widowed'])->default('single');
            $table->enum('sex', ['F', 'M', 'O'])->default('M');
            $table->enum('status', ['completeData', 'incompleteData', 'notverified'])->default('notverified');
            $table->text('address')->nullable();
            // Campos de notificaciones
            $table->text('fcm_device_token')->nullable();
            $table->json('notification_preferences')->nullable();
            // ── Pharma: información médica opcional del comprador ─────────
            // Se llenan en un paso OPCIONAL del onboarding buyer y son
            // datos sensibles de salud (Ley Protección Datos VE 2025):
            // acceso restringido al paciente, farmacia despachadora y
            // administrador, retención limitada.
            $table->text('allergies')->nullable()
                ->comment('Alergias del paciente (texto libre, opcional).');
            $table->text('medical_notes')->nullable()
                ->comment('Notas médicas relevantes del paciente (opcional).');
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone', 32)->nullable();
            $table->boolean('medical_consent_given')->default(false)
                ->comment('Consentimiento del paciente para guardar datos de salud.');
            $table->timestamp('medical_consent_at')->nullable();
            $table->timestamps();

            // Índices de performance (consolidados desde add_performance_indexes)
            $table->index('status', 'profiles_status_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Asegurar que no haya FKs desde phones antes de dropear profiles
        if (Schema::hasTable('phones')) {
            Schema::table('phones', function (Blueprint $table) {
                if (DB::getDriverName() !== 'sqlite') {
                    try {
                        $table->dropForeign(['profile_id']);
                    } catch (\Throwable $e) {
                        // Si no existe la FK, continuar sin fallar el rollback
                    }
                }
            });
        }

        Schema::dropIfExists('profiles');
    }
};
