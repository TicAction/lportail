<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolboard extends Model
{
    protected $fillable = [
        'name','adress_number',
        'adress','phone','zipcode',
        'url'
    ];



}
