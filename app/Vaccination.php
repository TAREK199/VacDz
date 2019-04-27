<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    protected $guarded=[];

    public function polyclinique()
    {
        return $this->belongsTo(Polyclinique::class);
    }
    public function vaccin()
    {
        return $this->belongsTo(Vaccin::class);
    }
    public function details()
    {
        return $this->hasOne(VaccinationInfo::class);
    }
}
