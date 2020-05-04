<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->index();
            $table->integer('survey_unit_id')->unsigned()->index();
            $table->string('questioncontent');
            $table->string('answercontent1');
            $table->string('answercontent2');
            $table->string('answercontent3');
            $table->string('answercontent4');
            $table->string('answercontent5');
            $table->string('answercontent6');
            $table->string('answercontent7');
            $table->string('answercontent8');
            $table->string('answercontent9');
            $table->string('answercontent10');
            $table->string('answercontent11');
            $table->string('answercontent12');
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
        Schema::dropIfExists('questions');
    }
}
