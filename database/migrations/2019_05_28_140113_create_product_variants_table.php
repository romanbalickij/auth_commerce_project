<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('product_variants', function (Blueprint $table) {
//            $table->increments('id');
//
//            $table->unsignedInteger('product_id')->nullable();
//            $table->unsignedInteger('attribute_id')->nullable();
//            $table->string('description');
//            $table->timestamps();
//
//
//            $table->foreign('product_id')->references('id')->on('products')
//                ->onUpdate('cascade')->onDelete('set null');
//
//
//            $table->foreign('attribute_id')->references('id')->on('attributes')
//                ->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('product_variants');
    }
}
