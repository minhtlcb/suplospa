<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tag', function (Blueprint $table) {
            $table->bigIncrements('id_post_tag');

            $table->integer('id_news')->unsigned();
            $table->foreign('id_news')->references('id_post_tag')->on('news');

            $table->integer('id_tags')->unsigned();
            $table->foreign('id_tags')->references('id_post_tag')->on('tag');
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
        Schema::dropIfExists('post_tag');
    }
}
