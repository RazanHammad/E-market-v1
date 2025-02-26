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
            $table->bigIncrements('id');
             $table->string('title');
            $table->unsignedBigInteger('catagory_id');
            $table->text('details');
            $table->integer('quantity');
            $table->float('price',6,2);
            $table->string('img');
            $table->string('images');
            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');

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
