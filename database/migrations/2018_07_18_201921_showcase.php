<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Showcase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showcase', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('about');
            $table->string('category');
            $table->string('price');
            $table->string('price_rate');
            $table->string('page_id');
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
        Schema::dropIfExists('showcase');
    }
}
