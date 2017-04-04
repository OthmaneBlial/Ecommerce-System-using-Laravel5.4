<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderedproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderedproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->timestamps();

            //FK:
            $table->integer('product_id');
            $table->integer('user_id');
            $table->integer('cart_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderedproducts');
    }
}
