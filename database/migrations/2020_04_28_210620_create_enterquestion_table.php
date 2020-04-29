<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnterquestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterquestions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('enterquestion_id')->unsigned()->index();
            $table->integer('question_id')->unsigned()->index();
            $table->integer('answer_id')->unsigned()->index();
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
        Schema::dropIfExists('enterquestions');
    }
}
