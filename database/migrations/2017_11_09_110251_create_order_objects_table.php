<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');

            $table->string('type');
            $table->string('name');
            $table->string('action_type');
            $table->string('dep_type');

            $table->string('address_region');
            $table->string('address_city');
            $table->string('address_street')->nullable();
            $table->string('address_house')->nullable();
            $table->string('address_building')->nullable();
            $table->string('address_flat')->nullable();
            $table->string('address_zip')->nullable();
            $table->string('address_comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_objects');
    }
}
