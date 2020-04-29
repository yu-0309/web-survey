<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyPrefecture extends Model
{
    protected $fillable = ['survey_id','name'];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function surveyareas()
    {
        return $this->hasMany(Questionsheet::class);
    }
}
