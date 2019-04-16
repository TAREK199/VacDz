<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    protected $guarded=[];
    public function pere()
    {
        return $this->belongsTo(Pere::class);
    }

}
