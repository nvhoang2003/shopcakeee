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
        ]);
    }
    public function Categoryview(){
        $event=CategoryRepos::getAllCategory();

        return view('normal.Categoryview',
        [
            'event'=>$event
        ]);
    }
    public function CakeWithEvent($eventid){
        $cake = CakeRepos::getAllCake();
        foreach ($cake as $c){
            if($c->event == $eventid){
                $cake1= CakeRepos::getCakeByEventid($eventid);
                return view('normal.CakeWithEvent',[
                    'cake1'=>$cake1
                ]);
            }
        }
    }
}
