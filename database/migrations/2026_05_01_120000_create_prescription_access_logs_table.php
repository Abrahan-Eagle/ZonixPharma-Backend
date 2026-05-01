<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('prescription_access_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prescription_id')->constrained('prescriptions')->cascadeOnDelete();
            $table->foreignId('actor_profile_id')->nullable()->constrained('profiles')->nullOnDelete();
            $table->string('actor_role', 32)->nullable();
            $table->string('action', 48);
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 512)->nullable();
            $table->json('meta')->nullable();
            $table->timestamps();

            $table->index(['prescription_id', 'created_at'], 'rx_access_rx_created_idx');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('prescription_access_logs');
    }
};
