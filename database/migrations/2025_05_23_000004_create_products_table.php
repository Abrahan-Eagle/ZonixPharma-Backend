<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Crea tabla `products` (medicinas y productos de farmacia para Zonix Pharma).
     *
     * El modelo se llama `Product` por simplicidad/compatibilidad histórica del proyecto,
     * pero conceptualmente es un **Medicine / producto de farmacia** y trae todos los
     * atributos farmacéuticos relevantes para venezuela:
     *   - Identificación: principio activo (`active_ingredient`), presentación,
     *     forma farmacéutica (`dosage_form`), concentración, fabricante.
     *   - Trazabilidad: registro sanitario INHRR, código de barras, código ATC.
     *   - Regulación: `requires_prescription`, `prescription_type`,
     *     `controlled_substance`, `cold_chain`.
     *
     * Los lotes y fechas de vencimiento viven en una tabla aparte (`medicine_lots`).
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('commerce_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->text('image')->nullable();
            $table->boolean('available')->default(true);
            $table->integer('stock_quantity')->nullable()
                ->comment('Cantidad agregada en inventario. Si es null se usa solo `available`. Stock por lote vive en medicine_lots.');

            // Identificación farmacéutica
            $table->string('active_ingredient')->nullable()
                ->comment('Principio activo (ej: paracetamol, amoxicilina).');
            $table->enum('dosage_form', [
                'tablet', 'capsule', 'syrup', 'suspension', 'injection',
                'cream', 'ointment', 'gel', 'drops', 'patch',
                'suppository', 'inhaler', 'powder', 'solution', 'spray',
                'device', 'other',
            ])->nullable()->comment('Forma farmacéutica.');
            $table->string('concentration')->nullable()
                ->comment('Concentración (ej: 500mg, 200mg/5ml).');
            $table->string('presentation')->nullable()
                ->comment('Presentación comercial (ej: caja x 20 tabletas, blíster x 10).');
            $table->string('manufacturer')->nullable()
                ->comment('Laboratorio fabricante.');

            // Regulación / trazabilidad
            $table->string('health_registry')->nullable()
                ->comment('Registro sanitario INHRR (E.F. xxxxx).');
            $table->string('barcode')->nullable()
                ->comment('Código de barras (EAN-13 / código nacional).');
            $table->string('atc_code', 16)->nullable()
                ->comment('Código ATC OMS (clasificación anatómica terapéutica química).');

            // Reglas Rx / cadena de frío / controlados
            $table->boolean('requires_prescription')->default(false);
            $table->enum('prescription_type', ['common', 'retained', 'special'])
                ->nullable()
                ->comment('Solo aplica si requires_prescription=true.');
            $table->boolean('controlled_substance')->default(false)
                ->comment('Sustancia controlada / psicotrópico (receta retenida con duplicado).');
            $table->boolean('cold_chain')->default(false)
                ->comment('Requiere cadena de frío (insulina, vacunas, biológicos).');

            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->index('available', 'products_available_index');
            $table->index(['commerce_id', 'available'], 'products_commerce_available_index');
            $table->index('requires_prescription', 'products_requires_prescription_index');
            $table->index('barcode', 'products_barcode_index');
            $table->index('active_ingredient', 'products_active_ingredient_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
