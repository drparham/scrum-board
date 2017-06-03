<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSprintRows extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprint_rows', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('sprint_id')->unsigned();
            $table->integer('order');
            $table->timestamps();

            $table->foreign('sprint_id')->references('id')->on('sprints');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sprint_rows');
    }
}
