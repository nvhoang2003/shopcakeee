<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\CakeRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function PHPUnit\Framework\countOf;

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
                $event = CategoryRepos::getEventById($eventid);
                if(count($cake1)==0){
                    return view('normal.CakeWithEvent',[
                        'event'=>$event
                    ]);
                } else{
                    return view('normal.CakeWithEvent',[
                        'cake1'=>$cake1,
                        'event'=>$event
                    ]);
                }
            }
        }
    }

    public function search(request $request){

//        dd($request->all());
        $search = $request->search;
        $cake = CakeRepos::getCakeBySearch($search);
//        dd(count($cake));
        return view('normal.cakeSearch',[
                'cake'=> $cake,
                'search'=> $search
            ]

        );
    }































    public function Cakedetail($cakeid){
        $cake = CakeRepos::getCakeById($cakeid);
        $cake1 = CakeRepos::getCakeByEventid($cake[0]->event);
        return view('normal.cakedetail',[
            'cake'=> $cake[0],
            'cake1' => $cake1
        ]);
    }

}
