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
        Schema::create('orders', function (Blueprint $table) {
            $table->comment('Orders data is stored in the customers table');
            $table->id();
            $table->integer('orderNumber');
            $table->date('orderDate');
            $table->date('requiredDate');
            $table->date('shippedDate');
            $table->string('status');
            $table->text('comments');
            $table->integer('customerNumber');
            $table->timestamps();
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
