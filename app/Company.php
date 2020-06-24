<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";
    protected $primaryKey = "id";

    public function reservations(){
        return $this->hasMany(Reservation::class,'id_company');
    }
}
