<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [''];


    public function school()
    {
        return $this->belongsTo('App\School');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
