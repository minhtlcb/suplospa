<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOderDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oder_detail', function (Blueprint $table) {
            $table->bigInteger('id_order')->unsigned();
             $table->foreign('id_order')->references('id_order')->on('order')->onDelete('cascade');
             $table->bigInteger('id_product')->unsigned();
              $table->foreign('id_product')->references('id_product')->on('product');
              $table->bigInteger('id_classification')->unsigned();
               $table->foreign('id_classification')->references('id_classification')->on('classification_name');
               $table->integer('quantity')->unsigned();
               $table->integer('price')->unsigned();
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
        Schema::dropIfExists('oder_detail');
    }
}
