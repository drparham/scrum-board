<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSprintColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sprint_columns', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('sprint_id')->unsigned();
            $table->integer('order');
            $table->string('name');
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
        Schema::dropIfExists('sprint_columns');
    }
}
