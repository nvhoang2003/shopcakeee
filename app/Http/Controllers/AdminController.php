<?php

namespace App\Http\Controllers;


use App\Repository\AdminRepos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        $admin = AdminRepos::getAllAdmin();
        return view('Admin.index',
            [
                'admin'=>$admin,
            ]);
    }



    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'username' => ['required'],
                'contact' => ['required'],
                'password'=> ['required',
                    function($attribute, $value , $fail){
                        global $request;

                        $pass = sha1($request->input('password'));
                        $admin = AdminRepos::getAdminById($request->input('username'));
                        if($admin[0]->PASSWORD == $pass){
                            $key =1;
                        } else {
                            $key = 0;
                        }

                        if($key != 1){
                            $fail('Wrong Pass. Please Enter Correct Password!!');
                        }
                    },
                ],
                'email' => ['required']

            ],
            [
                'username.required' => 'username can not be empty',
                'contact.required' => 'contact can not be empty',
                'email.required' => 'email can not be empty'
            ]
        );
    }

    public function edit($admin)
    {
        $admin = AdminRepos::getAdminById($admin);


        return view(
            'Admin.edit',
            ["admin" => $admin[0]]);
    }

    public function update(Request $request, $username){
//      dd($request->all());

        if ($username != $request->input('username')) {
            return redirect()->action('AdminController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        $admin = (object)array(
            'username' => $request->input('username'),
            'contact' => $request->input('contact'),
            'email' => $request->input('email')
        );
        AdminRepos::update($admin);

        return redirect()->action('AdminController@index')
            ->with('msg', 'Update Successfully');
    }
}
