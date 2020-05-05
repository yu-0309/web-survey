<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->index();
            $table->integer('survey_area_id')->unsigned()->index();
            $table->string('name')->unique();
            $table->string('password');
            $table->integer('role_id')->unsigned()->index();
            $table->string('tel')->unique();
            $table->string('email')->unique();
            $table->rememberToken();
            $table->timestamps();

            //外部キー制約
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
            $table->foreign('survey_area_id')->references('id')->on('survey_areas')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_users');
//        Schema::table('survey_users', function (Blueprint $table) {
//            $table->dropForeign('survey_users_survey_id_foreign');
//            $table->dropForeign('survey_users_survey_area_id_foreign');
//            $table->dropForeign('survey_users_role_id_foreign');
//        });
    }
}
