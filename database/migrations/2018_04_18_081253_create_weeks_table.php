<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('week_name')->nullable();
            $table->longText('week_description')->nullable();
            $table->smallInteger('question_id');
            $table->smallInteger('puzzle_id');
            $table->smallInteger('card_id');
            $table->boolean('is_complete');
            $table->time('timetaken');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}
