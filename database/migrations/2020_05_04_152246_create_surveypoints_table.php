<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveypointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_area_id')->unsigned()->index();
            $table->string('name');
            $table->string('address');
            $table->timestamps();

            //外部キー制約
            $table->foreign('survey_area_id')->references('id')->on('survey_areas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surveys_points', function (Blueprint $table) {
            $table->dropForeign('survey_points_survey_area_id_foreign');
        });
    }
}
