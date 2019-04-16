<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pere extends Model
{
    protected $guarded=[];
    public function enfants()
    {
        return $this->hasMany(Enfant::class);
    }

    


}
