<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts_item', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreignId('cart_id');
            $table->string('sku', 50);
            $table->float('price', 8, 2);
            $table->float('discount', 8, 2);
            $table->smallInteger('quantity')->default(0);
            $table->tinyInteger('active');
            $table->longText('content')->nullable();
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
        //
    }
}
