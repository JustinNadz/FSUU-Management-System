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
            $table->string('semester');
            $table->integer('year');
            $table->timestamps();
            
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->unique(['faculty_id', 'course_id', 'semester', 'year']);
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
