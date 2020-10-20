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
            $table->id('id');
            $table->string('product_name');
            $table->string('owner');
            $table->string('version');
            $table->string('reqular_price');
            $table->string('premium_price');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->text('product_details');
            $table->text('feature');
            $table->text('release_log');
            $table->text('compatible_browser');
            $table->text('software_version');
            $table->text('demourl');
            $table->integer('resulation');
            $table->text('framework');
            $table->text('meta_tag');
            $table->text('meta_description');
            $table->text('image');
            $table->text('gallary_image');
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
