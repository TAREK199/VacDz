<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Polyclinique extends Model
{
    protected $guarded=[];

    public function epsp()
    {
        return $this->belongsTo(Epsp::class);
    }
    
}
