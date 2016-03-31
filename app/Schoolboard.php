<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{
    protected $fillable = [
        'name','region',
        'adress','city','phone','email',
        'url'
    ];

        public function school()
        {
            return $this->hasMany('App\School');
        }

}
