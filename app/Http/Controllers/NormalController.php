<?php

namespace App\Http\Controllers;

use App\Repository\CakeRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class NormalController extends Controller
{
    //
    public function home(){
        $event = CategoryRepos::getAllCategory();
        $cake = CakeRepos::getAllCake();
        return view('normal.HomeView',
        [
            'event'=>$event,
            'cake'=>$cake
        ]

        );
    }
}
