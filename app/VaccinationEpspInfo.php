<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VaccinationEpspInfo extends Model
{
    public function vaccin(){
        return $this->belongsTo(Vaccin::class);
    }

    public function vacciniation(){
        return $this->belongsTo(VaccinationEpsp::class);
    }
}
