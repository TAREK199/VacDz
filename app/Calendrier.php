<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    
    public function vaccin()
    {
        return $this->belongsTo(Vaccin::class);
    }
}
