<?php

namespace App\Http\Controllers;

use App\Repository\CakeRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    //
    public function index()
    {
        $cake=CakeRepos::getAllCakeWithevent();
        return view('Cake.indexCake',
            [
                'cake'=>$cake
            ]);
    }

    public function create(){
        $event =CategoryRepos::getAllCategory();
        return view(

            'Cake.newCake',
            [
                "cake"=>(object)[
                    'cakeid'=>'',
                    'event'=>'',
                    'cakename'=>'',
                    'flavor'=>'',
                    'price'=>'',
                    'expiry'=>'',
                    'image'=>'',
                    'size'=>''
                ],
                "event"=>$event
            ]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();
        if($request->hasFile('image')){
            $destination_path = 'public/images/Category';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $cake = (object)[
                'cakename' => $request->input('cakename'),
                'flavor' => $request->input('flavor'),
                'price' => $request->input('price'),
                'expiry'=>$request->input('expiry'),
                'image'=>$image_name,
                'size'=>$request->input('size'),
                'event'=>$request->input('event')
            ];

        }



        $newid = CakeRepos::insert($cake);

        return redirect()
            ->action('CakeController@index')
            ->with('msg', 'New cake with id: '.$newid.' has been inserted');
    }

    function formValidate (Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'cakename' => ['required'],
                'flavor' => ['required'],
                'price'=>['required'],
                'expiry'=>['required'],
                'size'=>['required'],
                'event'=>['gt:0']
            ],
            [
                'cakename.required' => 'cakename can not be empty',
                'flavor.required' => 'flavor can not be empty',
                'price.required'=>'price can not be empty',
                'expiry.required'=>'expiry can not be empty',
                'size.required'=>'size can not be empty',
                'event.gt'=>'Please choose event cake'
            ]
        );
    }

    public function edit($cakeid)
    {
        $cake = CakeRepos::getCakeById($cakeid);
        $event =CategoryRepos::getAllCategory();

        return view(
            'Cake.updateCake',
            [
                "cake" => $cake[0],
                "event"=>$event
            ]);
    }

    public function update(Request $request, $cakeid)
    {
        if ($cakeid != $request->input('cakeid')) {
            return redirect()->action('CakeController@index');
        }

        $this->formValidate($request)->validate(); //shortcut

        if($request->hasFile('image')) {
            $destination_path = 'public/images/Cake';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $cake = (object)[
                'cakeid' => $request->input('cakeid'),
                'cakename' => $request->input('cakename'),
                'flavor' => $request->input('flavor'),
                'price' => $request->input('price'),
                'expiry' => $request->input('expiry'),
                'image' => $image_name,
                'size' => $request->input('size'),
                'event' => $request->input('event'),
            ];
            CakeRepos::update($cake);
        } else {
            $cake = (object)[
                'cakeid' => $request->input('cakeid'),
                'cakename' => $request->input('cakename'),
                'flavor' => $request->input('flavor'),
                'price' => $request->input('price'),
                'expiry' => $request->input('expiry'),
                'image' => $request->input('image'),
                'size' => $request->input('size'),
                'event' => $request->input('event'),
            ];
            CakeRepos::update_cake($cake);
        }




        return redirect()->action('CakeController@index')
            ->with('msg', 'Update Successfully');
    }


    public function show($cakeid){
        $cake = CakeRepos::getCakeById($cakeid);
        $event =CategoryRepos::getEventByCakeId($cakeid);
        return view('Cake.showCake',
            [
                'cake'=>$cake[0],
                'event'=>$event[0]
            ]);

    }

    public function confirm($cakeid){
        $cake = CakeRepos::getCakeById($cakeid);
        $event= CategoryRepos::getEventByCakeId($cakeid);
        return view('Cake.deleteCake',
            [
                'cake' => $cake[0],
                'event'=>$event[0]
            ]
        );
    }

    public function destroy(Request $request, $cakeid)
    {
        if ($request->input('cakeid') != $cakeid) {
            return redirect()->action('CakeController@index');
        }
        CakeRepos::delete($cakeid);
        return redirect()->action('CakeController@index')
            ->with('msg', 'Delete Successfully');
    }

}
