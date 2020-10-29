<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricingListTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricing_list_tags', function (Blueprint $table) {
            $table->smallInteger('tag_id')->unsigned();
            $table->tinyInteger('pricing_list_id')->unsigned();
            $table->primary(['tag_id', 'pricing_list_id']);
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
        Schema::dropIfExists('pricing_list_tags');
    }
}
