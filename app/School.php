<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    public $timestamps = false;
    protected $fillable = ['name','adress_number','adress','phone','zipcode','url','schoolboard_id'];

    public function schoolboard()
    {
        return $this->belongsTo('App\Schoolboard');
    }

   public function classroom()
   {
      return $this->hasMany('App\Classroom');
   }

}
