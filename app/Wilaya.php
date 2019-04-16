<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Wilaya extends Model
{
    protected $guarded=[];

    public function communes()
    {
        return $this->hasMany(Commune::class);
    }

 
}
