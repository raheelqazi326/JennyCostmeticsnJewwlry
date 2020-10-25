<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('discount_type', ['percent', 'fixed'])->default('fixed');
            $table->double('discount', 15, 8);
            $table->double('minimum_amount', 15, 8);
            $table->dateTime('expire_at');
            $table->enum('status', ['active', 'deactive', 'expire'])->default('active');
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
        Schema::dropIfExists('coupons');
    }
}
