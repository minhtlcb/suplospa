<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassificationName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classification_name', function (Blueprint $table) {
        
            $table->bigIncrements('id_classification');
            $table->bigInteger('id_group')->unsigned()->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->integer('quantity');
            $table->integer('price');

             $table->foreign('id_group')->references('id_group')->on('classification_group');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classification_name');
    }
}
