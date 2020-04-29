<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveypointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveypoints', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surveyarea_id')->unsigned()->index();
            $table->string('name');
            $table->string('address');
            $table->timestamps();
            
            //外部キー参照
            $table->foreign('surveyarea_id')->references('id')->on('surveyareas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveypoints');
    }
}
