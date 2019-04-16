<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    public function vaccination()
    {
        return $this->belongsTo(Vaccination::class);
    }
}
