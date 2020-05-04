<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyPrefecture extends Model
{
//    protected $table = 'surveyprefectures';
    protected $fillable = ['survey_id','name'];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function surveyareas()
    {
        return $this->hasMany(SurveyArea::class);
    }
}
