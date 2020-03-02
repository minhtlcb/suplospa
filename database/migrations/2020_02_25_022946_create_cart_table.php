<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_product')->unsigned();
            $table->foreign('id_product')->references('id_product')->on('product')->onDelete('cascade');
            $table->bigInteger('id_classification')->unsigned();
            $table->foreign('id_classification')->references('id_classification')->on('classification_name');
            $table->integer('quantity')->unsigned();
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
        Schema::dropIfExists('cart');
    }
}
