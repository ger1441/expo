<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function getInfo(Request $request){
        $local = $request->get('local');
        $infoReservation  = Reservation::with('company')->where('id_local','=',$local)->first();
        return response()->json(['info'=>$infoReservation]);
    }
}
