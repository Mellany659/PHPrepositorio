<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table="customer";
    protected $primaryKey = "CustomerId";
    public $timestamps = false;

    public function facturas(){

        return $this->hasMany('App\Facturas' , 'CustomerId');
    }

  
}
