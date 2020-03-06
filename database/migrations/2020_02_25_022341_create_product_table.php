<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
             $table->bigIncrements('id_product');
             $table->bigInteger('id_types')->unsigned();
             $table->bigInteger('id_trademark')->unsigned()->nullable();
             $table->string('sku')->nullable();
             $table->string('name');
             $table->text('image');
             $table->integer('price')->unsigned()->nullable();
             $table->integer('price_comparison');
             $table->text('short_description')->ullable();
             $table->text('long_description')->nullable();
             $table->integer('quantity')->unsigned()->nullable();
             $table->boolean('new')->nullable();
             $table->timestamps();
             $table->foreign('id_types')->references('id_types')->on('product_type');
             $table->foreign('id_trademark')->references('id_trademark')->on('trademark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
