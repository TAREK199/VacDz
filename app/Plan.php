<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function polyclinique()
    {
        return $this->belongsTo(Polyclinique::class);
    }
    public function vaccin()
    {
        return $this->belongsTo(Vaccin::class);
    }
}
