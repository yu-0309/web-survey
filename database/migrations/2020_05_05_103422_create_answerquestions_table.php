<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_user_id')->unsigned()->index();
            $table->integer('survey_unit_id')->unsigned()->index();
            $table->integer('question_id')->unsigned()->index();
            $table->timestamps();

            //外部キー制約
            $table->foreign('survey_user_id')->references('id')->on('survey_users')->onDelete('cascade');
            $table->foreign('survey_unit_id')->references('id')->on('survey_units')->onDelete('no action');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer_questions');
//        Schema::table('answer_questions', function (Blueprint $table) {
//            $table->dropForeign('answer_questions_survey_user_id_foreign');
//            $table->dropForeign('answer_questions_survey_unit_id_foreign');
//            $table->dropForeign('answer_questions_question_id_foreign');
//        });
    }
}
