<?php

namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use App\User;
use Validator;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('login');
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
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
         // to logout
         auth()->logout();
         return redirect('/login');
    }


    public function login(Request $request)
    {
    $selected_user = User::where('email',request('email'))->first();

    // if ($selected_user->account_status == "active"){

         //check email and pass
         if(!auth()->attempt(request(['email','password']))){
            return back()->withErrors([
               'message'=>'Your email or password is incorrect'
           ]);
           }else{ 
            return redirect('/');
           }
    // }else{
    //     return back()->withErrors([
    //             'message'=>'Your account has been blocked. You can not sign in'
    //             ]);;
    }


    }


