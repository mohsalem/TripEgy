<?php

namespace App\Http\Controllers\WEB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Company;
use App\Event;
use Validator;



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
          $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'from'=>'required',
            'to'=>'required',
            'deadline_date'=>'required',
            'location'=>'required',
            'location_name'=>'required',
            'facility'=>'required',
            'max_bookings'=>'required',
            // 'photo'=>'required',
                ]);

        //  dd(request('name'));
            $requested_company = Event::get()->where('name', request('name'))
                                              ->where('description', request('description'))
                                              ->where('from', request('from'))
                                              ->where('to', request('to'))
                                              ->where('deadline_date', request('deadline_date'))
                                              ->where('location', request('location'))
                                              ->where('location_name', request('location_name'))
                                              ->where('facility', request('facility'))
                                              //   ->where('photo', request('photo'))
                                              ->where('max_bookings', request('max_bookings'))->first();
            if ($requested_company == null){
                $add_company = new Event;
                $add_company->name = request('name');
                $add_company->description = request('description');
                $add_company->from = request('from');
                $add_company->to = request('to');
                $add_company->deadline_date = request('deadline_date');
                $add_company->location = request('location');
                $add_company->location_name = request('location_name');
                $add_company->facility = request('facility');
                // $add_company->photo = request('photo');
                $add_company->max_bookings = request('max_bookings');
                $delete_goal->visibility=1; 
                $add_company->save();

                // dd(request('name'));
                flash('success',"The Event has been added successfully");
                return back();
            }else{
                flash('danger',"The Event already exist");
                return back();
            }

    }
    
    public function update_event( Request $reques)
    {
         // validation
         $validation= Validator::make($request->all(),[
            
            'id'=>'required',
            'name'=>'required',
            'description'=>'required',
            'from'=>'required',
            'to'=>'required',
            'deadline_date'=>'required',
            'location'=>'required',
            'location_name'=>'required',
            'facility'=>'required',
            'max_bookings'=>'required',
            // 'photo'=>'required',
    
            ]);
            if ($validation->fails()){
                 flash('danger','The Event has not been updated successfully');
                return redirect('/get_all_event');
            }
            $id = request('id');
            $update_company = Event::find($id);
            $update_company->name=request('name');
            $update_company->description = request('description');
            $update_company->from = request('from');
            $update_company->to = request('to');
            $update_company->deadline_date = request('deadline_date');
            $update_company->location = request('location');
            $update_company->location_name = request('location_name');
            $update_company->facility = request('facility');
            // $update_company->photo = request('photo');
            $update_company->max_bookings = request('max_bookings');
            $update_company->save();
    
            flash('success','The Event has been updated successfully');
            return redirect('/get_all_event');
    

    }
   
    public function delete_event( Request $reques)
    {
        // validation
        $validation= Validator::make($request->all(),[
        'id'=>'required',
        ]);
        if ($validation->fails()){
        return back();
        }

        $event = Event::where('id',request('id'))->first();

        if($event != null){
        // $delete_event->delete();
        $id = request('halaqa_id');
        $delete_event = Halaqa::find($id);
        $delete_event->is_deleted=0;
        $delete_event->save();
        // session()->
        flash('success','The Event has been deleted successfully');
        return back();
        }else{
        flash('danger','this Event dosent exist');
        return back();
        }
  

    }
   
    public function get_all_event( Request $reques)
    {
        $company_id = session()->get('company.id');
        $allcompany = Company::where('company_id', $company_id)
        ->where('visibility', 1)->get();
        $get_all_event=[];
        // var_dump($allahalaqat);
       
        if(session()->get('id')!= null){
            $get_all_event = Event::where('id',session()->get('id') )->where('visibility', 1)->get();
          }
        // $increment = 1;
        return view('event',['allcompany' => $allcompany, 'get_all_event'=> $get_all_event ] ); 

    } 
    
}
