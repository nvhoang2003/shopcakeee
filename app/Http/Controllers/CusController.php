<?php

namespace App\Http\Controllers;

use App\Repository\CusRepos;
use Illuminate\Http\Request;
class CusController extends Controller
{
    public function index(){
        $cus = CusRepos::getAllCus();
        return view('Cus.indexCus',
            [
                'cus'=>$cus,
            ]);
    }
    public function edit($cusid)
    {
        $cus = CusRepos::getCusById($cusid);


        return view(
            'Cus.updateCus',
            ["cus" => $cus[0]]);
    }
    public function update(Request $request, $cusid)
    {
        if ($cusid != $request->input('cusid')) {
            //id in query string must match id in hidden input
            return redirect()->action('CusController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $cus = (object)[
            'cusname' => $request->input('cusname'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'contact' => $request->input('contact'),
            'email' => ($request->input('email')),
            'address' => ($request->input('address')),
            'cusid' => $request->input('cusid')

        ];
        CusRepos::update($cus);

        return redirect()->action('CusController@index')
            ->with('msg', 'Update Successfully');
    }
    function formValidate (Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'cusname' => ['required'],
                'dob' => ['required'],
                'gender'=>['required'],
                'contact'=>['required','digits:10'],
                'email'=>['required'],
                'address'=>['required']
            ],
            [
                'cusname.required' => 'cusname can not be empty',
                'dob.required' => 'dob can not be empty',
                'gender.required'=>'gender can not be empty',
                'contact.required'=>'contact can not be empty',
                'email.required'=>'email can not be empty',
                'address.required'=>' address can not be empty'
            ]
        );
    }


}
