<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id('report_id');
            $table->string('title', 100);
            $table->string('report_type', 50);
            $table->string('category', 50)->nullable();
            $table->text('description')->nullable();
            $table->json('parameters')->nullable(); // JSON structure of report parameters
            $table->unsignedBigInteger('created_by');
            $table->string('status', 20)->default('active');
            $table->string('schedule', 50)->nullable(); // For scheduled reports
            $table->boolean('is_public')->default(false);
            $table->timestamps();
            
            $table->foreign('created_by')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports');
    }
}
