<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyunitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_units', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->index();
            $table->string('survey_date');
            $table->integer('term_id')->unsigned()->index();
            $table->integer('total_id')->unsigned()->index();
            $table->string('memo');
            $table->timestamps();
            
            // 外部キー制約
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_units');
//        Schema::table('survey_units', function (Blueprint $table) {
//            $table->dropForeign('survey_units_survey_id_foreign');
//        });
    }
}
