<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    public function enfant()
    {
        return $this->belongsTo(Enfant::class);
    }
    public function polyclinique()
    {
        return $this->belongsTo(Polyclinique::class);
    }
}
