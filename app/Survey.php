<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $fillable = ['survey_id', 'survey_name','team_name','reference_date','question_id','surveyarea_id','surveyarea_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
