<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id_news');
             $table->bigInteger('id_category')->unsigned();
             $table->foreign('id_category')->references('id_category')->on('news_category');
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users');
            $table->string('title');
            $table->text('image');
            $table->text('details');

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
        Schema::dropIfExists('news');
    }
}
