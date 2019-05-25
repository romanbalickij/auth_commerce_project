<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('order_product', function (Blueprint $table) {
//            $table->Increments('id');
//            $table->unsignedInteger('order_id')->nullable();
//            $table->unsignedInteger('product_id')->nullable();
//            $table->integer('quantity')->unsigned();
//            $table->json('properties')->nullable();
//
//
//            $table->foreign('order_id')->references('id')->on('orders')
//                ->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('product_id')->references('id')->on('products')
//                ->onUpdate('cascade')->onDelete('cascade');
//
//
//            $table->timestamps();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_product');
    }
}
