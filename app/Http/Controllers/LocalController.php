<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;

class LocalController extends Controller
{
    public function index()
    {
        $locales = Local::all();
        return view('home',compact("locales"));
    }

    public function vacate(Request $request){
        $local = Local::findOrFail($request->local);
        $local->status = 0;
        $local->save();

        return response()->json(['res'=>'success']);
    }
}
