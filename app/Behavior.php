<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Behavior extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['behave_date','content','publish'];

    public function kids()
    {
        return $this->belongsTo('App\Kid');
    }
}
