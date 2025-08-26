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
            $table->string('full_name');
            $table->integer('birth_date')->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('zip_code', 20)->nullable();
            $table->string('country', 50)->default('USA');
            $table->integer('age')->nullable();
            $table->string('phone_number', 20)->nullable();
            $table->string('major', 100)->nullable();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('status', 20)->default('active'); // active/inactive/graduated/withdrawn
            $table->date('enrollment_date')->nullable();
            $table->date('expected_graduation_date')->nullable();
            $table->unsignedBigInteger('advisor_id')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('department_id')->references('department_id')->on('departments');
            $table->foreign('advisor_id')->references('faculty_id')->on('faculty')->onDelete('set null');
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
