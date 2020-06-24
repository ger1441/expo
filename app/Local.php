<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = "locals";
    protected $primaryKey = "id";

    public function reservation(){
        return $this->hasOne(Reservation::class,'id_local');
    }
}
