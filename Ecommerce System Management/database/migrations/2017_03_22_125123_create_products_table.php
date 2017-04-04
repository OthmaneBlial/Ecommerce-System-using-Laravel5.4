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
            $table->string('name');
            $table->string('description');
            $table->float('price');
            $table->integer('stock');
            $table->boolean('is_featured')->default(0);
            $table->boolean('statuts')->default(1);
            $table->timestamps();

            //FK:
            $table->integer('subcategory_id');
            $table->integer('company_id');

        });

        Schema::create('color_product', function (Blueprint $table) {
            
            $table->integer('color_id');
            $table->integer('product_id');
            $table->primary(['color_id', 'product_id']);

        });

        Schema::create('product_size', function (Blueprint $table) {
            
            $table->integer('size_id');
            $table->integer('product_id');
            $table->primary(['product_id', 'size_id']);

        });

        Schema::create('product_tag', function (Blueprint $table) {
            
            $table->integer('tag_id');
            $table->integer('product_id');
            $table->primary(['product_id', 'tag_id']);

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
        Schema::dropIfExists('product_size');
        Schema::dropIfExists('product_tag');
        Schema::dropIfExists('color_product');
    }
}
