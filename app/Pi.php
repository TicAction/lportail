<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pi extends Model
{
    protected $fillable = ['pi_date','force','difficulty','intervention','todo'];

    public function kid()
    {
        return $this->belongsTo('App\Kid');
    }
}
