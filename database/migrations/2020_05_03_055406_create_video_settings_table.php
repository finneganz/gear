<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('resolution_id')->foreign('resolution_id')->references('id')->on('resolutions')->onDelete('set null')->nullable();
            $table->integer('streatch')->nullable();
            $table->integer('anti_alias')->nullable();
            $table->integer('shadow_quality')->nullable();
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
        Schema::dropIfExists('video_settings');
    }
}
