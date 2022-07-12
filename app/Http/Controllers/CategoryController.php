<?php

namespace App\Http\Controllers;

use App\Repository\CakeRepos;
use App\Repository\CategoryRepos;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $event=CategoryRepos::getAllCategory();
        return view('Category.indexCategory',
            [
                'event'=>$event,
            ]);
    }

    public function create(){
        return view(
            'Category.newCategory',
            ["event"=>(object)[
                'eventid'=>'',
                'eventname'=>'',
                'image'=>'',
                'description'=>''
            ]]);
    }

    public function store(Request $request)
    {
        $this->formValidate($request)->validate();
        if($request->hasFile('image')){
            $destination_path = 'public/images/Category';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $event = (object)[
                'eventname' => $request->input('eventname'),
                'image' => $image_name,
                'description' => $request->input('description')

            ];

        }


        $newid = CategoryRepos::insert($event);

        return redirect()
            ->action('CategoryController@index')
            ->with('msg', 'New class with id: '.$newid.' has been inserted');
//        dd($request->all());
    }

    function formValidate(Request $request){
        return \Illuminate\Support\Facades\Validator::make(
            $request ->all(),
            [
                'eventname' => ['required'
                ],
                'description' => ['required']

            ],
            [
                'eventname.required' => 'eventname can not be empty',
                'description.required' => 'description can not be empty'
            ]
        );
    }

    public function edit($eventid)
    {
        $event = CategoryRepos::getEventById($eventid);

        return view(
            'Category.updateCategory', ["event" => $event[0]]);
    }

    public function update(Request $request, $eventid)
    {
        if ($eventid != $request->input('eventid')) {
            return redirect()->action('CategoryController@index');
        }

        $this->formValidate($request)->validate();

        if($request->hasFile('image')) {
            $destination_path = 'public/images/Category';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $event = (object)[
                'eventid' => $request->input('eventid'),
                'eventname' => $request->input('eventname'),
                'image' => $image_name,
                'description' => $request->input('description')
            ];
            CategoryRepos::update($event);
        } else{
            $event = (object)[
                'eventid' => $request->input('eventid'),
                'eventname' => $request->input('eventname'),
                'description' => $request->input('description')
            ];
            CategoryRepos::update_category($event);
        }

            return redirect()->action('CategoryController@index')
                ->with('msg', 'Update Successfully');
    }


    public function confirm($eventid){
        $event = CategoryRepos::getEventById($eventid);

        return view('Category.deleteCategory',
            [
                'event' => $event[0]
            ]
        );
    }

    public function destroy(Request $request, $eventid)
    {
        if ($request->input('eventid') != $eventid) {
            return redirect()->action('CategoryController@index');
        }
        $cake = CakeRepos::getAllCake();
        foreach ($cake as $c){
            if($c->event == $eventid){
                return redirect()->action('CategoryController@confirm', $eventid)
                    ->with('msgf', 'Delete failed because this event have some cake.');
            }
        }
        CategoryRepos::delete($eventid);
        return redirect()->action('CategoryController@index')
            ->with('msg', 'Delete Successfully');
    }

}
