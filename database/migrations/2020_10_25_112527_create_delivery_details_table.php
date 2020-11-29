<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('person_name', 60);
            $table->string('email', 60);
            $table->bigInteger('phone', 12);
            $table->string('line_1', 150);
            $table->string('line_2', 150);
            $table->string('city', 60);
            $table->string('state', 60);
            $table->string('country', 60);
            $table->string('zipcode', 10);
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
        Schema::dropIfExists('delivery_details');
    }
}
