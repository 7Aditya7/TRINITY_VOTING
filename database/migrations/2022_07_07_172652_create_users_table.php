<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('voterId')->unique();
            $table->string('citizenshipNumber')->unique();
            $table->string('name');
            $table->string('motherName');
            $table->string('fatherName');
            $table->string('province');
            $table->string('district');
            $table->string('gender');
            $table->date('dob');
            $table->string('phoneNumber')->unique();
            $table->string('photo');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('hasVoted')->default('0');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
