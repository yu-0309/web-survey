<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    protected $fillable = ['name'];

    public function questionsheets()
    {
        return $this->hasMany(Questionsheet::class);
    }
}
