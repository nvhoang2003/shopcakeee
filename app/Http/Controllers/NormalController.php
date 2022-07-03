<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepos;
use App\Repository\CakeRepos;
use App\Repository\CategoryRepos;
use App\Repository\CusRepos;
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
    public function signup(){
        return view('normal.signup',

            ["cus"=>(object)[
                'cusid'=>'',
                'cusname'=>'',
                'dob'=>'',
                'gender'=>'',
                'contact'=>'',
                'email'=>'',
                'address'=>''
            ]]);
    }

    public function Cakedetail($cakeid){
        $cake = CakeRepos::getCakeById($cakeid);
        $cake1 = CakeRepos::getCakeByEventid($cake[0]->event);
        return view('normal.cakedetail',[
            'cake'=> $cake[0],
            'cake1' => $cake1
        ]);
    }

    function formValidate (Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'cusname' => ['required'],
                'dob' => ['required', 'after:1900/01/01', 'before:2022/01/01'],
                'gender'=>['required'],
                'contact'=>['required','digits:10'],
                'email'=>['required','email'],
                'address'=>['required']
            ],
            [
                'cusname.required' => 'cusname can not be empty',
                'dob.required' => 'dob can not be empty',
                'gender.required'=>'gender can not be empty',
                'contact.required'=>'contact can not be empty',
                'email.required'=>'email can not be empty',
                'address.required'=>' address can not be empty',
                'email.email'=>'Invalid email'
            ]
        );
    }
    public function store(Request $request)
    {
//        dd($request->all());
        $this->formValidate($request)->validate();
        $cus = (object)[
            'cusname' => $request->input('cusname'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'contact'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address')
        ];


        $newid = CusRepos::insert($cus);

        return view('normal.complete');
    }

}
