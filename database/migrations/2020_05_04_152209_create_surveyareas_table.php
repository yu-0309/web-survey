<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_areas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_prefecture_id')->unsigned()->index();
            $table->string('name');
            $table->timestamps();

            //外部キー制約
            $table->foreign('survey_prefecture_id')->references('id')->on('survey_prefectures')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('survey_areas', function (Blueprint $table) {
            $table->dropForeign('survey_areas_survey_prefecture_id_foreign');
        });
    }
}
