<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id('enrollment_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->string('semester', 20);
            $table->integer('year');
            $table->string('section', 10)->nullable();
            $table->string('grade', 2)->nullable();
            $table->decimal('grade_points', 3, 2)->nullable();
            $table->string('status', 20)->default('registered'); // registered/dropped/completed
            $table->timestamp('registration_date')->useCurrent();
            $table->timestamp('last_updated')->nullable();
            $table->timestamps();
            
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty')->onDelete('set null');
            $table->unique(['student_id', 'course_id', 'semester', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_courses');
    }
}
