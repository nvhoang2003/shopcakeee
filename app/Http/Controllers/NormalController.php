<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalController extends Controller
{
    //
    public function home(){
        return view('normal.homepage');
    }
}
