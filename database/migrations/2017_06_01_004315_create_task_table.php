<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_story_id')->unsigned();
            $table->integer('sprint_row_id')->unsigned();
            $table->integer('sprint_column_id')->unsigned();
            $table->integer('points');
            $table->string('title');
            $table->text('details');
            $table->tinyInteger('status'); //StatusEnum
            $table->tinyInteger('type'); //TaskType Enum ('Bug', 'Feature', 'Chore')
            $table->timestamps();

            $table->foreign('user_story_id')->references('id')->on('user_stories');
            $table->foreign('sprint_row_id')->references('id')->on('sprint_rows');
            $table->foreign('sprint_column_id')->references('id')->on('sprint_columns');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
