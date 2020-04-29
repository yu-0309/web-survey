<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyPoint extends Model
{
    protected $fillable = ['surveyarea_id','name','address'];

    public function surveyarea()
    {
        return $this->belongsTo(SurveyArea::class);
    }
}
