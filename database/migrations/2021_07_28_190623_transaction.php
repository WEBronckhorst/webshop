<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaction extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreignId('order_id');
            $table->string('code', 100);
            $table->smallInteger('type')->default(0);
            $table->smallInteger('mode')->default(0);
            $table->smallInteger('status')->default(0);
            $table->float('price', 8, 2);
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
