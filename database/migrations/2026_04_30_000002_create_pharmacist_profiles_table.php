<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Perfil colegiado del farmacéutico responsable.
     * Un `profile_id` con rol `pharmacist` tiene una entrada aquí; uno o varios
     * `commerces` pueden referenciarlo en `pharmacist_in_charge_profile_id`.
     */
    public function up(): void
    {
        Schema::create('pharmacist_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->unique()->constrained()->onDelete('cascade');
            $table->string('mpps_number')->unique()
                ->comment('Número MPPS del farmacéutico (Ministerio del Poder Popular para la Salud).');
            $table->string('college_license_number')->nullable()
                ->comment('Número de colegiatura del Colegio de Farmacéuticos correspondiente.');
            $table->date('license_expires_at')->nullable();
            $table->string('title_image_url')->nullable()
                ->comment('Foto/escaneo del título profesional (cifrado en disco).');
            $table->boolean('verified')->default(false);
            $table->timestamp('verified_at')->nullable();
            $table->unsignedBigInteger('verified_by_profile_id')->nullable()
                ->comment('Admin/operador interno que validó la colegiación.');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->index('verified', 'pharmacist_profiles_verified_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pharmacist_profiles');
    }
};
