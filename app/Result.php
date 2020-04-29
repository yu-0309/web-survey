<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['enterquestion_id','question_id','answer_id'];

    public function enterquestion()
    {
        return $this->belongsTo(EnterQuestion::class);
    }
}
