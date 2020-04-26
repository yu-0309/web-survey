<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionsheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('survey_id')->unsigned()->index();
            $table->string('date');
            $table->integer('term_id');
            $table->integer('total_flag');
            $table->string('memo');
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
        Schema::dropIfExists('questionsheets');
    }
}
