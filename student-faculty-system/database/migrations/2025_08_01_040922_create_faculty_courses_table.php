<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_courses', function (Blueprint $table) {
            $table->id('faculty_course_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('course_id');
            $table->string('semester', 20);
            $table->integer('year');
            $table->string('section', 10)->nullable();
            $table->string('classroom', 50)->nullable();
            $table->string('schedule', 100)->nullable(); // Days and times
            $table->integer('enrollment_count')->default(0);
            $table->timestamps();
            
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->unique(['faculty_id', 'course_id', 'semester', 'year', 'section'], 'faculty_courses_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty_courses');
    }
}
