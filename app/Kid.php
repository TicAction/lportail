<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{


    protected $fillable = ['firstname','lastname'];

    public function behaviors()
    {
        return $this->hasMany('App\Behavior');
    }
    public function pis()
    {
        return $this->hasMany('App\Pi');
    }
}
