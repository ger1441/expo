<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'id';

    public function local(){
        return $this->hasOne(Local::class,'id','id_local');
    }

    public function company(){
        return $this->belongsTo(Company::class,'id_company','id');
    }
}
