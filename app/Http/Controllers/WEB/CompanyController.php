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
    public function home_page_for_company()
    {  
        return view('homeofcompany');
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

    public function event_page(){
        return view('event');
    }



    public function creat_event_page(){
        return view('addEvent');
    }
    public function create_event(Request $request)
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

     
            $company = Company::where('user_id',auth()->user()->id)->first();
            $comapny_id = $company->id;


            $requested_event = Event::get()->where('name', request('name'))
                                              ->where('from', request('from'))
                                              ->where('to', request('to'))->first();
            if ($requested_event == null){
                $add_event = new Event;
                $add_event->company_id = $comapny_id;
                $add_event->name = request('name');
                $add_event->description = request('description');
                $add_event->from = request('from');
                $add_event->to = request('to');
                $add_event->deadline_date = request('deadline_date');
                $add_event->location = request('location');
                $add_event->location_name = request('location_name');
                $add_event->facility = request('facility');
                // $add_event->photo = request('photo');
                $add_event->max_bookings = request('max_bookings');
                $add_event->visibility=1; 
                $add_event->save();

                // dd(request('name'));
                session()->flash('success',"The Event has been added successfully");
                return back();
            }else{
                session()->flash('danger',"The Event already exist");
                return back();
            }

    }
    

    public function update_event_page(){
        return view('updateEvent');
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
            'photo'=>'required',
    
            ]);
            if ($validation->fails()){
                session()->flash('danger','The Event has not been updated successfully');
                return redirect('/get_all_event');
            }
            $id = request('id');
            $update_event = Event::find($id);
            $update_event->name=request('name');
            $update_event->description = request('description');
            $update_event->from = request('from');
            $update_event->to = request('to');
            $update_event->deadline_date = request('deadline_date');
            $update_event->location = request('location');
            $update_event->location_name = request('location_name');
            $update_event->facility = request('facility');
            $update_event->photo = request('photo');
            $update_event->max_bookings = request('max_bookings');
            $update_event->save();
    
            session()->flash('success','The Event has been updated successfully');
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
        $delete_event = Event::where('id',request('id'))->first();
        if($delete_event != null){
        // $delete_event->delete();
        $id = request('id');
        $delete_event = Event::find($id);
        $delete_event->visibility =0;
        $delete_event->save();
        // session()->
        session()->flash('success','The Event has been deleted successfully');
        return back();
        }else{
        session()->flash('danger','this Event dosent exist');
        return back();
        }
  

    }
   
    public function allevent_page(){
        return view('event');
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
        return view('event'); 

    } 
    
}
