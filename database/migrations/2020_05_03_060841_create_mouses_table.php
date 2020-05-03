<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mouse_name');
            $table->unsignedBigInteger('maker_id')->foreign('maker_id')->references('id')->on('makers')->onDelete('set null');
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
        Schema::dropIfExists('mouses');
    }
}
