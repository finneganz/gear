<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->undignedBigInteger('mouse_id')->foreign('mouse_id')->references('id')->on('mouses')->onDelete('set null')->nullable();
            $table->undignedBigInteger('mousepad_id')->foreign('mousepad_id')->references('id')->on('mousepads')->onDelete('set null')->nullable();
            $table->undignedBigInteger('mousebungee_id')->foreign('mousebungee_id')->references('id')->on('mousebungees')->onDelete('set null')->nullable();
            $table->undignedBigInteger('keyboard_id')->foreign('keyboard_id')->references('id')->on('keyboards')->onDelete('set null')->nullable();
            $table->undignedBigInteger('headset_id')->foreign('headset_id')->references('id')->on('headsets')->onDelete('set null')->nullable();
            $table->undignedBigInteger('mic_id')->foreign('mic_id')->references('id')->on('mics')->onDelete('set null')->nullable();
            $table->undignedBigInteger('monitor_id')->foreign('monitor_id')->references('id')->on('monitors')->onDelete('set null')->nullable();
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
        Schema::dropIfExists('users');
    }
}
