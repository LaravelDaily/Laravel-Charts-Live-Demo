<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpeedsTable extends Migration
{
    public function up()
    {
        Schema::create('speeds', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('speed');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
