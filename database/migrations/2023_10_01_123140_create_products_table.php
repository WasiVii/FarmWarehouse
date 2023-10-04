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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_photo')->nullable();
            $table->string('product_name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('product_description')->nullable();
            $table->string('product_category_id')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('product_unit')->nullable();
            $table->integer('price_per_unit')->nullable();
            $table->bigInteger('discount_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('warehouse_id')->nullable();
            $table->bigInteger('product_status_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
