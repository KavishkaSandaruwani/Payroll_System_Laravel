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
        Schema::create('profiles', function (Blueprint $table) {

            $table->String('fullname');
            $table->String('EmployeeID');
            $table->String('birthday');
            $table->String('department');
            $table->String('starting_date')->nullable();
            $table->String('gender');
            $table->String('phone');
            $table->String('address');
            $table->String('email');
            $table->String('passw');
            $table->String('bank');
            $table->String('acc_type');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
