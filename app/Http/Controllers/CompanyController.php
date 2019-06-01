<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('company');
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
    {
        //
    }

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
    public function destroy($id)
    {
        //
    }

    public function create_event( Request $reques)
    {
        // validation
        $validation= Validator::make($request->all(),[
            'name'=>'required',
            'type' =>'required',
            'days' =>'required',
            'time' =>'required',
            'classification_id'=>'required',
          ]);
          if ($validation->fails()){
              return response()->json($validation->errors(),400);
          }
          $requested_admin = Halaqa::get()->where('name', request('name') )->where('classification_id', request('classification_id') );
          if ($requested_admin->count() < 1){
              $add_halaqa = Halaqa::create($request->all());
  
              $data = [
                  "message" => "The halaqa has been added successfully"
              ];
              return ;
          }else{
              $data = [
                  "message" => "Duplicated"
              ];
              return ;
          }
        
    }
    
    public function update_event( Request $reques)
    {


    }
   
    public function delete_event( Request $reques)
    {


    }
   
    public function show_event( Request $reques)
    {


    } 
    
}
