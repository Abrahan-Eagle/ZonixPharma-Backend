<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Lotes de medicamento por producto.
     * El stock real de un `Product` se mantiene en agregado por compatibilidad,
     * pero el despacho FIFO usa esta tabla (lote con menor `expiry_date` primero,
     * descontando lo que aún tiene cantidad disponible).
     */
    public function up(): void
    {
        Schema::create('medicine_lots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('lot_number');
            $table->date('expiry_date');
            $table->date('manufactured_at')->nullable();
            $table->integer('quantity_received')->unsigned();
            $table->integer('quantity_available')->unsigned();
            $table->date('received_at')->nullable();
            $table->string('supplier')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->unique(['product_id', 'lot_number'], 'medicine_lots_product_lot_unique');
            $table->index(['product_id', 'expiry_date'], 'medicine_lots_product_expiry_index');
            $table->index(['product_id', 'quantity_available'], 'medicine_lots_product_qty_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('medicine_lots');
    }
};
