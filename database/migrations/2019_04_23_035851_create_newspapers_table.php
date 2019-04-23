<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewspapersTable extends Migration
{

    public function up()
    {
        Schema::create('newspapers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('mobile');
            $table->string('details')->nullable();
            $table->float('buying_price')->default(0.00);
            $table->float('selling_price')->default(0.00);
            $table->boolean('status')->default(1)->comment('0=Inactive, 1=Active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('newspapers');
    }
}
