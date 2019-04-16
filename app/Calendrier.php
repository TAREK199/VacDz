<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendrier extends Model
{
    public function epsp()
    {
        return $this->belongsTo(Epsp::class);
    }
    public function vaccin()
    {
        return $this->belongsTo(Vaccin::class);
    }
}
