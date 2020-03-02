<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificationGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classification_group', function (Blueprint $table) {
            $table->bigIncrements('id_group');
            $table->bigInteger('id_product')->unsigned();
         
            $table->string('title');
            $table->integer('dequy');

            $table->foreign('id_product')->references('id_product')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classification_group1');
    }
}
