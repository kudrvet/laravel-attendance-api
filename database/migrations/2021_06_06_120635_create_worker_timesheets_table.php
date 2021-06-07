<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerTimesheetsTable extends Migration
{

    public function up()
    {
        Schema::create('worker_timesheets', function (Blueprint $table) {
            $table->id();
            $table->integer('worker_id');
            $table->timestamp('datetime_in');
            $table->timestamp('datetime_out');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('worker_timesheets');
    }
}
