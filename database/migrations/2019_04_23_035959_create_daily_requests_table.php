<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('daily_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('newspaper_id')->unsigned();
            $table->integer('merchant_id')->unsigned();
            $table->integer('need_for_tomorrow');
            $table->integer('return_from_yesterday');
            $table->boolean('status')->default(1)->comment('0=Inactive, 1=Active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily_requests');
    }
}
