<?php
namespace App\Traits;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

trait SendMessage
{
    public function sendMessage($company,$local,$inicio,$fin,$desc){
        $data = [
            "company" => $company,
            "local"   => $local,
            "start"   => $inicio,
            "end"     => $fin,
            "desc"    => $desc
        ];
        Mail::to('reservations@expo.com')->send(new SendMail($data));
    }
}
