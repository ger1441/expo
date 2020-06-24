<?php

use Illuminate\Database\Seeder;
use App\Reservation;

class ReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservation = new Reservation();
        $reservation->id_local   = 2;
        $reservation->id_company = 1;
        $reservation->start_date = "2020-08-14";
        $reservation->end_date   = "2020-08-18";
        $reservation->save();

        $reservation = new Reservation();
        $reservation->id_local   = 6;
        $reservation->id_company = 2;
        $reservation->start_date = "2020-10-01";
        $reservation->end_date   = "2020-10-07";
        $reservation->save();
    }
}
