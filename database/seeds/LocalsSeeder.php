<?php

use Illuminate\Database\Seeder;
use App\Local;

class LocalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $local = new Local();
        $local->number = 1;
        $local->email  = "local1@gmail.com";
        $local->status = 0;
        $local->save();

        $local = new Local();
        $local->number = 2;
        $local->email  = "local2@gmail.com";
        $local->status = 0;
        $local->save();

        $local = new Local();
        $local->number = 3;
        $local->email  = "local3@gmail.com";
        $local->status = 0;
        $local->save();

        $local = new Local();
        $local->number = 4;
        $local->email  = "local4@gmail.com";
        $local->status = 0;
        $local->save();

        $local = new Local();
        $local->number = 5;
        $local->email  = "local5@gmail.com";
        $local->status = 0;
        $local->save();

        $local = new Local();
        $local->number = 6;
        $local->email  = "local6@gmail.com";
        $local->status = 0;
        $local->save();
    }
}
