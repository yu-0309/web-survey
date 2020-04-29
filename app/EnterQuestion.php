<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnterQuestion extends Model
{
    protected $fillable = ['enteruser_id','questionsheet_id'];

    public function surveyuser()
    {
        return $this->belongsTo(SurveyUser::class);
    }

    public function questionsheet()
    {
        return $this->belongsTo(Questionsheet::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
