<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyareaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyareas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surveyprefecture_id')->unsigned()->index();
            $table->string('name');
            $table->timestamps();

            //外部キー参照
            $table->foreign('surveyprefecture_id')->references('id')->on('surveyprefectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveyareas');
    }
}
