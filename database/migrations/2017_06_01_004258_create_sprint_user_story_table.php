<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSprintUserStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_stories', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('sprint_row_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('type'); //UserStoryType Enum ('Bugs', 'Feature')
            $table->timestamps();

            $table->foreign('sprint_row_id')->references('id')->on('sprint_rows');

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
