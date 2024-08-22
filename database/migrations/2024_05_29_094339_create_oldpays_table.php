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
        Schema::create('oldpays', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('month');
            $table->String('fullname');
            $table->String('EmployeeID');
            $table->String('address');
            $table->String('department');
            $table->String('basicSalary');
            $table->String('hourlyPay');
            $table->String('workDays');
            $table->String('attendancePay');
            $table->String('overtimePay');
            $table->String('bonus');
            $table->String('loans');
            $table->String('noPay');
            $table->String('epf');
            $table->String('totalPay');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oldpays');
    }
};
