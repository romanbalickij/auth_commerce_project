<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('attributes', function (Blueprint $table) {
//            $table->increments('id');
//            $table->engine = 'InnoDB';
//            $table->unsignedInteger('product_id')->nullable();
//            $table->string('name');
//            $table->timestamps();
//
//
//                $table->foreign('product_id')->references('id')->on('products')
//                ->onUpdate('cascade')->onDelete('cascade');
//
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributes');
    }
}
