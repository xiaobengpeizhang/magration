<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave', function (Blueprint $table) {
            $table->char('requestCode');   //前缀LV+时间戳
            $table->string('type');        //请假类型：病假，婚假，产假。。。。
            $table->string('reason');
            $table->datetime('startTime');
            $table->datetime('endTime');
            $table->datetime('create_at'); 
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leave');
    }
}
