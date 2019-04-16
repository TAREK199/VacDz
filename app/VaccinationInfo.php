<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccinationInfo extends Model
{
    public function vaccin(){
        return $this->belongsTo(Vaccin::class);
    }

    public function vacciniation(){
        return $this->belongsTo(Vacciniation::class);
    }
}
