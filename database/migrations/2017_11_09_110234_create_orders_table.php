<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('fio');
            $table->string('document')->nullable();
            $table->string('inn');
            $table->string('ogrn');
            $table->string('okved')->nullable();
            $table->string('org_size')->nullable();

            $table->string('address_region');
            $table->string('address_city');
            $table->string('address_street')->nullable();
            $table->string('address_house')->nullable();
            $table->string('address_building')->nullable();
            $table->string('address_flat')->nullable();
            $table->string('address_zip')->nullable();
            $table->string('address_postbox')->nullable();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
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
