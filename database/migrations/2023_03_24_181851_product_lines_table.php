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
        Schema::create('productlines', function (Blueprint $table) {
            $table->comment('ProductLiness data is stored in the customers table');
            $table->id();
            $table->string('productLine');
            $table->string('textDescription');
            $table->mediumText('htmlDescription');
            $table->mediumText('image');
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
