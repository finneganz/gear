<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FixColumnNameFromStreatchToStretchOnVideoSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('video_settings', function (Blueprint $table) {
            $table->renameColumn('streatch', 'stretch');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('video_settings', function (Blueprint $table) {
            $table->renameColumn('stretch', 'streatch');
        });
    }
}
