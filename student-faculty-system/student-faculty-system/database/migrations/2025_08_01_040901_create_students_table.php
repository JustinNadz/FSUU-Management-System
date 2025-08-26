<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('student_id');
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address')->nullable();
            $table->integer('age')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('major')->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('status')->nullable(); // active/inactive/graduated
            $table->timestamps();
            
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->unique('user_id');
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
