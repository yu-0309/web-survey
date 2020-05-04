<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['survey_id','surveyunit_id','questioncontent','answercontent1','answercontent2','answercontent3','answercontent4','answercontent5','answercontent6','answercontent7','answercontent8','answercontent9','answercontent10','answercontent11','answercontent12'];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function surveyunits()
    {
        return $this->hasMany(SurveyUnit::class);
    }

    public function answerquestions()
    {
        return $this->hasMany(AnswerQuestion::class);
    }
}
