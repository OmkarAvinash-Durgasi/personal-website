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
        Schema::create('employees', function (Blueprint $table) {
            $table->comment('Employees data is stored in the customers table');
            $table->id();
            $table->integer('employeeNumber');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('extension');
            $table->string('email')->unique();
            $table->string('officeCode');
            $table->integer('reportsTo');
            $table->string('jobTitle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
