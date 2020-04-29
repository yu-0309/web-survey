<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['question_id','content'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
