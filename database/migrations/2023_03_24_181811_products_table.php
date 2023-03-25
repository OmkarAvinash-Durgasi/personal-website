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
            $table->comment('Products data is stored in the customers table');
            $table->id();
            $table->integer('productCode');
            $table->string('productName');
            $table->string('productLine');
            $table->string('productScale');
            $table->string('productVendor');
            $table->text('productDescription');
            $table->smallInteger('quantityInStock');
            $table->decimal('buyPrice',10,2);
            $table->decimal('MSRP',10,2);
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
