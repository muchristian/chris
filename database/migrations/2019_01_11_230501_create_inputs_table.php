<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('itemtype_id')->unsigned();
            $table->integer('campany_id')->unsigned();
            $table->integer('site_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('quantity');
            $table->timestamps();
            $table->foreign('itemtype_id')->references('id')->on('itemtypes');
            $table->foreign('campany_id')->references('id')->on('campanies');
            $table->foreign('site_id')->references('id')->on('sites');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}
