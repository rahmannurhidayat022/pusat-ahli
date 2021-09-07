<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registers extends Model
{
    protected $table = 'registers';
    protected $guarded =  [];
    
    public function coin()
    {
        return $this->hasOne('App\Models\Coin', 'id_coin');
    }

}
