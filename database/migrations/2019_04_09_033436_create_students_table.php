<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('regNumber')->unique();
            $table->string('email');
            $table->string('surname');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fullName');
            $table->string('address');
            $table->string('about');
            $table->string('hobbies');
            $table->date('yearOfAdmission');
            $table->string('dob');
            $table->integer('guardian_id');
            $table->integer('class_id');
            $table->string('image');
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
        Schema::dropIfExists('students');
    }
}
