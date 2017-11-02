<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeoffers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('big_image');
            $table->integer('big_image_percent');
            $table->string('big_image_title');
            $table->text('mid_image');
            $table->string('mid_image_title');
            $table->text('small_one_image');
            $table->string('small_one_title');
            $table->text('small_two_image');
            $table->string('small_two_title');
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
        Schema::dropIfExists('homeoffers');
    }
}
