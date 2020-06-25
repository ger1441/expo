<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Company,Reservation, Local};
use App\Traits;

class CompanyController extends Controller
{
    /* Trait para envio de correo */
    use Traits\SendMessage;

    public function register(Request $request){
        $validateForm =$request->validate([
            'company' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'email' => 'required|string',
            'description' => 'required|string',
            'local' => 'required|integer'
        ]);

        $nameLogo = "";
        /* Comprobamos si se adjuntó el logo */
        if($request->uploadLogo){
            if($request->hasFile('logo')){
                $auxExtension = $request->logo->extension();
                $auxRand = mt_rand(100000,999999);
                $nameLogo = $auxRand.".".$auxExtension;
                $request->logo->storeAs('public/companies/logos',$nameLogo);
            }
        }

        /* Registramos a la compañía */
        $company = new Company();
        $company->name = $request->company;
        $company->rfc  = $request->rfc ?? "XAXX010101000";
        $company->logo = $nameLogo;
        $company->description = $request->description;
        $company->email = $request->email;
        $company->save();

        /* Insertamos la reservación a nombre de la empresa */
        $reservation = new Reservation();
        $reservation->id_local = $request->local;
        $reservation->id_company = $company->id;
        $reservation->start_date = $request->start_date;
        $reservation->end_date = $request->end_date;
        $reservation->save();

        /* Actualizamos el status del local */
        $local = Local::findOrFail($request->local);
        $local->status = 1;
        $local->save();

        /* Enviamos correo de confirmacion */
        $this->sendMessage($request->company,$request->local,$request->start_date,$request->end_date,$request->description);

        return response()->json(["res"=>"success"]);
    }
}
