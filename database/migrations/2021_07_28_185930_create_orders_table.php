<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('session_id');
            $table->string('token', 100);
            $table->smallInteger('status')->default(0);
            $table->float('subTotal', 8, 2);
            $table->float('itemDiscount', 8, 2);
            $table->float('tax', 8, 2);
            $table->float('shipping', 8, 2);
            $table->float('total', 8, 2);
            $table->string('promo', 50);
            $table->float('discount', 8, 2);
            $table->float('grandTotal', 8, 2);
            $table->string('firstName', 50)->nullable();
            $table->string('middleName', 50)->nullable();
            $table->string('lastName', 50)->nullable();
            $table->string('mobile', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('line1', 50)->nullable();
            $table->string('line2', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('country', 50)->nullable();
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
        Schema::dropIfExists('orders');
    }
}
