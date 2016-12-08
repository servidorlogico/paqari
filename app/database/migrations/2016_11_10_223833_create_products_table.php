<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug',100)->unique();
            $table->string('name');
            $table->string('description');
            $table->double('price');
            $table->integer('stock');
            $table->enum('section',['autism','unique','extra']);
            $table->integer('rest');
            $table->string('url_1')->nullable();
            $table->string('url_2')->nullable();
            $table->string('url_3')->nullable();
            $table->integer('season_id')->unsigned()->nullable()    ;
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('season_id')->references('id')->on('seasons');



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
        Schema::dropIfExists('products');
    }
}
