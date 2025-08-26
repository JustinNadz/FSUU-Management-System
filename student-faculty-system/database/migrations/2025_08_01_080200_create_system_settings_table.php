<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id('setting_id');
            $table->string('setting_name', 50)->unique();
            $table->string('setting_value', 255);
            $table->string('description', 255)->nullable();
            $table->string('data_type', 20); // string/number/boolean/date
            $table->unsignedBigInteger('updated_by');
            $table->timestamp('last_updated')->useCurrent();
            $table->timestamps();

            $table->foreign('updated_by')->references('user_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_settings');
    }
} 