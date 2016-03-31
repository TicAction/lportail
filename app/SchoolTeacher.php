<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolTeacher extends Model
{

    public $timestamps = false;
    protected $fillable = ['teacher_id','school_id','years'];
}
