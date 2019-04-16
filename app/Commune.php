<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Commune extends Model
{
   
    protected $guarded=[];
    public function wilaya()
    {
        return $this->belongsTo(Wilaya::class);
    }

    public function epsp()
    {
        return $this->belongsTo(Epsp::class);
    }
}
