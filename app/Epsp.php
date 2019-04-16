<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epsp extends Model
{
    protected $guarder=[];

    public function polycliniques()
    {
        return $this->hasMany(Polyclinique::class);
    }

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }
  
}
