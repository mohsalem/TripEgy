<?php

namespace App\Http\Controllers\WEB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use App\User;
use App\Event;
use App\Company;
use App\Booking;
use App\RatingEvent;

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
        $array1=Event::get();
        $reviews=RatingEvent::join('users', 'users.id', 'rating_events.user_id')
        ->get();
    // dd($reviews);
        return view('home',['array1'=> $array1, 'reviews'=>$reviews]);
    }
    
    public function profile_user_page()
    {  
        // dd('hi');
        return view('profile');
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


    public function update_user_info(Request $request)
    {
        // validation
        $this->validate($request,[
        'name'=>'nullable|max:30|min:4|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
        'email'=>'max:191|email',
        'password'=>'max:191|min:6',
        'gender'=>'nullable',
        'phone'=>'numeric',
        'birthdate'=>'before:today',
        'user_image'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

            $user = User::where('id',auth()->user()->id)->first();
            $user_id = $user->id;
            if (request('user_image'))
            {
                $image = $request->file('user_image'); //holding the inserted image 
                $newimgname = uniqid().".".$image->getClientOriginalExtension();
                $image->move('imgs/uploaded/',$newimgname);
                $image_path= '/imgs/uploaded/'.$newimgname;
                $user->user_image = $image_path;
                $user->save();

            }
            if (request('name')){
                $user->name = request('name');
                $user->save();
                
            }
            if (request('email')){
                $user->email = request('email');
                $user->save();
                
            }
            if (request('password')){
                $user->password = bcrypt(request('password'));
                $user->save();
                
            }
            if (request('gender')){
                $user->gender = request('gender');
                $user->save();
                
            }
            if (request('phone')){
                $user->phone = request('phone');
                $user->save();
                
            }
            if(request('birthdate')){
                $user->birthdate = request('birthdate');
                $user->save();
                
            }
            // $user->name = request('name');
            // $user->email = request('email');
            // $user->password = bcrypt(request('password'));
            // $user->gender = request('gender');
            // $user->phone = request('phone');
            // $user->birthdate = request('birthdate');
            // $user->save();
            // $selected_user->update($request->all());
            session()->flash('message','Information modified successfully');
            return back();
        // }

    }

    public function book_event( Request $request)
    {
        // dd( $request);
        // $this->validate($request,[
        // 'id'=>'required',
        // // 'payment_status'=>'required',
        //     ]);
        if(auth()->user()){
            $user = User::where('id',auth()->user()->id)->first();
            $user_id = $user->id;
            
            $event = Event::where('id',request('id'))->first();
            // dd( $event);
            $event_id = $event->id;


            $requested_booking = Booking::get()->where('user_id', $user_id)
                                        ->where('event_id', $event_id)->first();
                                        // dd($requested_booking);
            if($requested_booking == null){
                $book_event = new Booking;
                $book_event->user_id = $user_id;
                $book_event->event_id = $event_id;
                // $book_event->payment_method = request('payment_method');
                $book_event->booked=1; 
                $book_event->number_of_traviles=18; 
                $book_event->save();
                session()->flash('success',"The Event has been Booked successfully");
                return redirect('/home');
                // dd('jjjj');
                // return back();
            }else{
                session()->flash('danger',"The Event already booked");
                return redirect('/home');
                // return back();
            }
        }else{
            return redirect("/login");
        }
        
        
        
    }
    public function cancel_event( Request $request)
    {
        if(auth()->user()){
            $user = User::where('id',auth()->user()->id)->first();
            $user_id = $user->id;
            
            $event = Event::where('id',request('id'))->first();
            // dd( $event);
            $event_id = $event->id;


            $book_event = Booking::get()->where('user_id', $user_id)
                                        ->where('event_id', $event_id)->first();
                                        //  dd($requested_booking);
            if($book_event != null){
               
                $book_event->user_id = $user_id;
                $book_event->event_id = $event_id;
                // $book_event->payment_method = request('payment_method');
                $book_event->booked=0; 
                $book_event->number_of_traviles=18; 
                $book_event->save();
                session()->flash('success',"The Event has been Booked successfully");
                return redirect('/home');
                // dd('jjjj');
                // return back();
            }else{
                session()->flash('danger',"The Event already booked");
                return redirect('/home');
                // return back();
            }
        }else{
            return redirect("/login");
        }
        
        
    }
    
    public function myevent(){
        $array1=Event::join('bookings', 'events.id', 'bookings.event_id')
        ->where('bookings.user_id', auth()->user()->id)
        ->select( 'events.id as id','events.name as name' ,'events.company_id as company_id',
        'events.category as category','events.description as description','events.from as from',
        'events.to as to','events.deadline_date as deadline_date','events.location as location',
        'events.location_name as location_name','events.facility as facility','events.photo as photo',
        'events.max_bookings as max_bookings', 
        'bookings.id as id ','bookings.event_id as event_id ','bookings.user_id as user_id ',
        'bookings.booked as booked ','bookings.number_of_traviles as number_of_traviles '
        )
        ->where('visibility', 1)
        ->where('bookings.booked', 1)
        ->get();
        // dd($array1);
        return view('myevent',['array1'=> $array1]);    }
    

    public function review_event( Request $request)
    { 
        // dd('dffvxvc');
        $this->validate($request,[
            
            'event_id'=>' ',
            'stars'=>'required',
            'review'=>'required',
                ]);

            $event = Event::where('id', request('event_id'))->first();
            // dd( $event );
            $event_id = $event->id;

            $user = User::where('id',auth()->user()->id)->first();
            $user_id = $user->id;
            
            

            $rate_event = RatingEvent::get()->where('stars', request('stars'))
                                            //   ->where('review', request('review'))->first();
                                              ->where('user_id',$user_id)->first();
            if ($rate_event == null){
                $rate_event = new RatingEvent;
                $rate_event->event_id = $event_id;
                $rate_event->user_id = $user_id;
                $rate_event->stars = request('stars');
                $rate_event->review = request('review');
                $rate_event->save();

                // dd(request('stars'));
                session()->flash('success',"The review has been added successfully");
                return back();
            }else{
                session()->flash('danger',"The review already exist");
                return back();
            }
    }

    public function review_company( Request $reques)
    {
        $this->validate($request,[
            'stars'=>'required',
            'review'=>'required',
                ]);

     
            $user = User::where('id',auth()->user()->id)->first();
            $user_id = $user->id;

            $company = User::where('id',auth()->user()->id)->first();
            if(auth()->user()->role == 'company')
            {
                $comapny_id = $company->id;

            }
            

            $rate_company = RatingEvent::get()->where('stars', request('stars'))
                                            //   ->where('review', request('review'))->first();
                                              ->where('user_id',  $user_id)->first();
            if ($rate_company == null){
                $rate_company = new RatingEvent;
                $rate_company->comapny_id = $comapny_id;
                $rate_company->user_id = $user_id;
                $rate_company->stars = request('stars');
                $rate_company->review = request('review');
                $rate_company->save();

                // dd(request('stars'));
                session()->flash('success',"The review has been added successfully");
                return back();
            }else{
                session()->flash('danger',"The review already exist");
                return back();
            }
    }
    // public function show_review_event( Request $reques)
    // {
        

    // }
    // public function show_review_company( Request $reques)
    // {


    // }

   
    public function search_event( Request $reques)
    {
        $input_data = request('user_input');

        if($input_data != ''){
            $search_results = Event::where('name', 'LIKE', '%' . $input_data . '%')
            ->orWhere('location_name', 'LIKE', '%' . $input_data . '%')
            ->orWhere('from', 'LIKE', '%' . $input_data . '%')
            ->orWhere('facility', 'LIKE', '%' . $input_data . '%')
            ->Where('visibility', 1 )
            // ->orWhere('category ', 'LIKE', '%' . $input_data . '%')
            ->get();
            return view('search',['array1'=>$search_results]);
        }else{
            return redirect('/home')->with('message','No information has been entered');
        }

    }



    
}
