<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crea tabla `orders` (pedidos farmacéuticos para Zonix Pharma).
     *
     * Estados Pharma:
     *   `pending_payment` (default cuando todo es OTC)
     *   `pending_prescription_validation` (al menos un ítem requires_prescription)
     *   `paid` → `processing` → `shipped` → `delivered`
     *   `cancelled`
     *
     * Cuando hay Rx y la receta es validada, el pedido pasa de
     * `pending_prescription_validation` a `pending_payment`.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('profile_id')->constrained()->onDelete('cascade');
            $table->foreignId('commerce_id')->constrained()->onDelete('cascade');
            $table->enum('delivery_type', ['pickup', 'delivery']);
            $table->enum('status', [
                'pending_prescription_validation',
                'pending_payment',
                'paid',
                'processing',
                'shipped',
                'delivered',
                'cancelled',
            ]);
            $table->boolean('approved_for_payment')->default(false);
            $table->timestamp('approved_for_payment_at')->nullable();
            $table->decimal('total', 10, 2);
            $table->decimal('delivery_fee', 10, 2)->default(0);
            $table->decimal('delivery_payment_amount', 10, 2)->nullable();
            $table->decimal('commission_amount', 10, 2)->default(0);
            $table->decimal('cancellation_penalty', 10, 2)->default(0);
            $table->string('cancelled_by')->nullable();
            $table->integer('estimated_delivery_time')->nullable();
            $table->text('receipt_url')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('reference_number')->nullable();
            $table->timestamp('payment_validated_at')->nullable();
            $table->timestamp('payment_proof_uploaded_at')->nullable();
            $table->text('cancellation_reason')->nullable();
            $table->text('delivery_address')->nullable();
            $table->decimal('delivery_latitude', 10, 7)->nullable();
            $table->decimal('delivery_longitude', 10, 7)->nullable();
            $table->text('notes')->nullable();
            $table->timestamp('agent_accepted_at')->nullable();
            $table->string('pickup_token', 64)->nullable();
            $table->string('delivery_token', 64)->nullable();

            // ── Pharma: requiere receta ────────────────────────────
            $table->boolean('requires_prescription')->default(false)
                ->comment('True si al menos un ítem del pedido es Rx; impacta máquina de estados.');
            $table->unsignedBigInteger('prescription_id')->nullable()
                ->comment('FK a prescriptions una vez subida la receta.');
            $table->timestamp('prescription_validated_at')->nullable();
            $table->boolean('cold_chain_required')->default(false)
                ->comment('Algún ítem requiere cadena de frío; restringe modos de delivery.');

            $table->timestamp('stock_restocked_at')->nullable()
                ->comment('Marca idempotente de reposición de inventario al cancelar.');

            $table->timestamp('expires_at')->nullable()
                ->comment('TTL para subir receta en pedidos Rx sin prescription_id (huérfanos).');

            $table->timestamps();

            $table->index('status', 'orders_status_index');
            $table->index('created_at', 'orders_created_at_index');
            $table->index('profile_id', 'orders_profile_id_index');
            $table->index('commerce_id', 'orders_commerce_id_index');
            $table->index(['commerce_id', 'status', 'created_at'], 'orders_commerce_status_created_index');
            $table->index(['profile_id', 'created_at'], 'orders_profile_created_index');
            $table->index('requires_prescription', 'orders_requires_prescription_index');
            $table->index('prescription_id', 'orders_prescription_id_index');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
