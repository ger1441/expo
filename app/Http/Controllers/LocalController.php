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
}
