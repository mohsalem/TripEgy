<?php

namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //to make the middleware for only index method
    public function __construct()
    {
        // $this->middleware('admin', ['only' => ['index']]);
    }

    public function index()
    {
       
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { // validation
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        // $user= User::get()->where('name',$name)->first();
        // return view('profile',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 
    }


    public function update_user_info(Request $request, $id)
    {
        // validation
        $this->validate($request,[
        'name'=>'nullable|max:30|min:4|regex:/(^([a-zA-Z]+)(\d+)?$)/u|unique:users',
        'email'=>'max:191|email|unique:users',
        'password'=>'max:191|min:6|confirmed',
        'gender'=>'nullable',
        'phone'=>'max:15|min:11|numeric',
        'birthdate'=>'before:today',
        'user_image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if (request('user_image')){
            //rename the images files
            $image = $request->file('user_image'); //holding the inserted image 
            $newimgname = uniqid().".".$image->getClientOriginalExtension();

            //moving the pic to images folder
            $image->move(public_path('imgs/uploaded/'),$newimgname);

            //image path
            $image_path= '/imgs/uploaded/'.$newimgname;

            $selected_user = User::find($id);
            $selected_user->user_image = $image_path;
            $selected_user->save();
            session()->flash('message','Information modified successfully');
            return back();

        }else{
            $selected_user = User::find($id);
            $selected_user->update($request->all());
            session()->flash('message','Information modified successfully');
            return back();
        }

    }

    public function book_event( Request $reques)
    {
        
        
    }

    public function cancel_event( Request $reques)
    {
        
        
    }

    public function review_event( Request $reques)
    {
        
        
    }

    public function review_company( Request $reques)
    {
        
        
    }

    public function search_event( Request $reques)
    {
        
        
    }



    
}
