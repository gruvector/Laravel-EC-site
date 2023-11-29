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
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->string('product_name');

            $table->string('product_code');
            $table->string('product_quantity');
            $table->text('product_details');
            $table->string('product_color')->nullable();
            $table->string('product_size')->nullable();
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->string('video_link')->nullable();
            $table->integer('main_slider')->nullable();
            $table->integer('hot_deal')->nullable();
            $table->integer('best_rated')->nullable();
            $table->integer('mid_slider')->nullable();
            $table->integer('hot_new')->nullable();
            $table->integer('buyone_getone')->nullable();
            $table->integer('trend')->nullable();
            $table->string('image_one')->nullable();
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->integer('status')->nullable();
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
