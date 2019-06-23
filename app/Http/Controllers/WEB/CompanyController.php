<?php

namespace App\Http\Controllers\WEB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Company;
use App\Event;
use App\User;
use App\RatingEvent;
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
        $array1=Event::where('visibility', 1 )->get();
        $reviews=RatingEvent::join('users', 'users.id', 'rating_events.user_id')->get();
        return view('homeofcompany',['array1'=>$array1 ,'reviews'=>$reviews]);

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


    public function map($latlng){
       $lat=explode(",", $latlng)[0];
       $lng=explode(",", $latlng)[1];
        return view('map',["lat"=>$lat,"lng"=>$lng]);
    }
    public function create_event_page(){
        return view('addEvent');
    }
    public function create_event(Request $request)
    {
          $this->validate($request,[
            'name'=>'required',
            'category'=>'required',
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

     
            $company = User::where('id',auth()->user()->id)->first();
            $comapny_id = $company->id;

            // if(auth()->user()->role == 'company')
            // {
            //     $comapny_id = $company->id;

            // }
            // dd($comapny_id);

            $requested_event = Event::get()->where('name', request('name'))
                                              ->where('from', request('from'))
                                              ->where('to', request('to'))->first();
            if ($requested_event == null){
                
                $add_event = new Event;
                    $image = $request->file('photo'); //holding the inserted image 
                    $newimgname = uniqid().".".$image->getClientOriginalExtension();
                    $image->move('imgs/uploaded/',$newimgname);
                    $image_path= '/imgs/uploaded/'.$newimgname;
                $add_event->photo = $image_path;
                // $add_event->save();
                $add_event->company_id = $comapny_id;
                $add_event->name = request('name');
                $add_event->category = request('category');
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
    

    public function update_event_page( Request $request){
        
        $event = Event::where('id',request('id'))->first();

        return view('updateEvent',['event'=>$event]);
    }
    public function update_event( Request $request)
    {
         // validation
         $this->validate($request,[
            
            'id'=>'required',
            'name'=>'',
            'description'=>'',
            'from'=>' ',
            'to'=>' ',
            'deadline_date'=>'',
            'location'=>'',
            'location_name'=>'',
            'facility'=>'',
            'max_bookings'=>'',
            'photo'=>' ',
    
            ]);
            

            $event = Event::where('id',request('id'))->first();
            $event_id = $event->id;


            if (request('photo'))
            {
                $image = $request->file('photo'); //holding the inserted image 
                $newimgname = uniqid().".".$image->getClientOriginalExtension();
                $image->move('imgs/uploaded/',$newimgname);
                $image_path= '/imgs/uploaded/'.$newimgname;
                $event->photo = $image_path; 
                $event->save();

            }
            if (request('name')){
                $event->name = request('name');
                $event->save();
                
            }
            if (request('description')){
                $event->description = request('description');
                $event->save();
                
            }
            if (request('from')){
                $event->from = (request('from'));
                $event->save();
                
            }
            if (request('to')){
                $event->to = request('to');
                $event->save();
                
            }
            if (request('deadline_date')){
                $event->deadline_date = request('deadline_date');
                $event->save();
                
            }
            if(request('location')){
                $event->birthdate = request('location');
                $event->save();
                
            }
            if(request('location_name')){
                $event->birthdate = request('location_name');
                $event->save();
                
            }
            if(request('facility')){
                $event->facility = request('facility');
                $event->save();
                
            }
            if(request('max_bookings')){
                $event->max_bookings = request('max_bookings');
                $event->save();
                
            }
            // $id = request('id');
            // $update_event = Event::find($id);
            // $image = $request->file('photo'); //holding the inserted image 
            // $newimgname = uniqid().".".$image->getClientOriginalExtension();
            // $image->move('imgs/uploaded/',$newimgname);
            // $image_path= '/imgs/uploaded/'.$newimgname;
            // $update_event->photo = $image_path; 
            // $update_event->name=request('name');
            // $update_event->description = request('description');
            // $update_event->from = request('from');
            // $update_event->to = request('to');
            // $update_event->deadline_date = request('deadline_date');
            // $update_event->location = request('location');
            // $update_event->location_name = request('location_name');
            // $update_event->facility = request('facility');
            // $update_event->max_bookings = request('max_bookings');
            // $event->save();
    
            session()->flash('success','The Event has been updated successfully');
            return redirect('/homeofcompany');
    

    }
   
    public function delete_event( Request $request)
    {
        // validation
        // $this->validate($request,[
        // 'id'=>'required'
        // ]);
        // if ($validation->fails()){
        //     return back();
        // }
        // dd(request('id'));
        $delete_event = Event::where('id',request('id'))->first();
        // dd(request($delete_event));
        if($delete_event != null){

        $delete_event->visibility =0;
        $delete_event->save();

        session()->flash('success','The Event has been deleted successfully');
        return back();
        }else{
        session()->flash('danger','this Event dosent exist');
        return back();
        }
  

    }
   
    // public function event_page(){
    //     return view('event');
    // }
    // public function allevent_page(){
    //     return view('event');
    // }
    public function get_all_event( Request $reques)
    {
        $company_id = session()->get('user.id');
        $allcompany =User::where('id', $id)
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
