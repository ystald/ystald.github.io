<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrdersTableAddPassport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('passport_serie')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issue')->nullable();
            $table->string('passport_issue_date')->nullable();
            $table->string('passport_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('passport_serie');
            $table->dropColumn('passport_number');
            $table->dropColumn('passport_issue');
            $table->dropColumn('passport_issue_date');
            $table->dropColumn('passport_address');
        });
    }
}
