<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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
    public function register(Request $request)
    {  
        // validation
        $this->validate($request,[
            'name'=>'required|max:30|min:4|regex:/(^([a-zA-Z]+)(\d+)?$)/u|unique:users',
            'email'=>'required|max:191|email|unique:users',
            'password'=>'required|max:191|min:6|confirmed',
            'password_confirmation'=>'required',
            'gender'=>'required',
            'phone'=>'required|max:15|min:11',
            'birthdate'=>'required|before:today',
            'user_image'=>'required',
            ]);

          //rename the images files
        //   $image = $request->file('user_image'); //holding the inserted image 
        // //   $newimgname = uniqid().".".$image->getClientOriginalExtension();

        //   //moving the pic to images folder
        //   $image->move(public_path('imgs/uploaded/'),$newimgname);

        //   //image path
        //   $image_path= '/imgs/uploaded/'.$newimgname;
  
          // inserting data
          $registereduser = new User;
          $registereduser->name = request('name');
          $registereduser->email = request('email');
          $registereduser->password =bcrypt(request('password'));
          $registereduser->gender = request('gender');
          $registereduser->phone = request('phone');
          $registereduser->birthdate = request('birthdate');
          
        //   $registereduser->user_image = $image_path;
          $registereduser->save();
          
          //login
          auth()->login($registereduser);

         return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}
