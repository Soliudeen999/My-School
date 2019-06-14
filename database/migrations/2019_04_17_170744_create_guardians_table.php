<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName');
            $table->string('otherNames');
            $table->string('fullName');
            $table->string('email')->unique();
            $table->string('password');
            $table->jsonb('student_id')->nullable();
            $table->string('occupation')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('partnerPhoneNo')->nullable();
            $table->string('about')->nullable();
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
        Schema::dropIfExists('guardians');
    }
}
