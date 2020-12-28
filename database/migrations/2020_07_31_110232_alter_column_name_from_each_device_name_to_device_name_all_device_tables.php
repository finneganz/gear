<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnNameFromEachDeviceNameToDeviceNameAllDeviceTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mouses', function (Blueprint $table) {
            $table->renameColumn('mouse_name', 'device_name');
        });
        Schema::table('mousepads', function (Blueprint $table) {
            $table->renameColumn('mousepad_name', 'device_name');
        });
        Schema::table('mousebungees', function (Blueprint $table) {
            $table->renameColumn('mousebungee_name', 'device_name');
        });
        Schema::table('keyboards', function (Blueprint $table) {
            $table->renameColumn('keyboard_name', 'device_name');
        });
        Schema::table('headsets', function (Blueprint $table) {
            $table->renameColumn('headset_name', 'device_name');
        });
        Schema::table('mics', function (Blueprint $table) {
            $table->renameColumn('mic_name', 'device_name');
        });
        Schema::table('monitors', function (Blueprint $table) {
            $table->renameColumn('monitor_name', 'device_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mouses', function (Blueprint $table) {
            $table->renameColumn('device_name', 'mouse_name');
        });
        Schema::table('mousepads', function (Blueprint $table) {
            $table->renameColumn('device_name', 'mousepad_name');
        });
        Schema::table('mousebungees', function (Blueprint $table) {
            $table->renameColumn('device_name', 'mousebungee_name');
        });
        Schema::table('keyboards', function (Blueprint $table) {
            $table->renameColumn('device_name', 'keyboard_name');
        });
        Schema::table('headsets', function (Blueprint $table) {
            $table->renameColumn('device_name', 'headset_name');
        });
        Schema::table('mics', function (Blueprint $table) {
            $table->renameColumn('device_name', 'mic_name');
        });
        Schema::table('monitors', function (Blueprint $table) {
            $table->renameColumn('device_name', 'monitor_name');
        });
    }
}