<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('warehouse_name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->bigInteger('mitra_id')->nullable();
            $table->text('warehouse_description')->nullable();
            $table->string('warehouse_category_id')->nullable();
            $table->text('warehouse_address')->nullable();
            $table->integer('stock_in_warehouse')->nullable();
            $table->integer('unit')->nullable();
            $table->integer('rent_price_per_unit')->nullable();
            $table->integer('manage_product_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
