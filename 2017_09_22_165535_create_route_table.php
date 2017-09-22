<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('requestType');   //属于哪种流程？请假or加班
            $table->char('pre_node');
            $table->foreign('pre_node')->references('nodeCode')->on('nodes');
            $table->char('next_node');
            $table->foreign('next_node')->references('nodeCode')->on('nodes');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routes');
    }
}
