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
            // $table->id();
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->double('cost', 15, 8);
            $table->integer('coupon_id')->unsigned()->nullable();
            $table->integer('delivery_detail_id')->unsigned();
            $table->tinyInteger('payment_type_id')->unsigned()->nullable();
            $table->tinyInteger('booking_status_id')->unsigned();
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
