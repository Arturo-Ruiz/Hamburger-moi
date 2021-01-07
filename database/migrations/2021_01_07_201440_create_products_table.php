<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->string('name');
            $table->mediumText('description');
            $table->string('image');
            $table->longText('gallery');
            $table->string('purchase_price');
            $table->string('sale_price');
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->unsignedBigInteger('combo_id')->unsigned();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('combo_id')->references('id')->on('combos');

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
