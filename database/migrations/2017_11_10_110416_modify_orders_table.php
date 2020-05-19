<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->integer('org_type')->nullable();
            $table->string('opf')->nullable();
            $table->string('org_name')->nullable();
            $table->string('kpp')->nullable();
            $table->string('post')->nullable();
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
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('org_type');
            $table->dropColumn('opf');
            $table->dropColumn('org_name');
            $table->dropColumn('kpp');
            $table->dropColumn('post');
            $table->dropColumn('address_comment');
        });
    }
}
