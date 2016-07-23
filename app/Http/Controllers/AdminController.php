<?php

namespace App\Http\Controllers;

use App\faculty;
use DB;
use Redirect;
use dateTime;
use App\course;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
	

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
	public function index()
    {
        return view('adminhome');
    }
	
	/*
	public function adminindex()
    {
        return view('adminhome');
    }
	
	public function apphome()
    {
        return view('apphome');
    }
	
	public function profile()
    {
		$id  = Auth::user()->id;
		/* $data = DB::table("course")->where('id', $id)->get(); 
		//dd($course,$data); 
		$course =  DB::table("coursedetails")->where('id', $id)->get();
        return view('profile',compact("course"));
    }
	
	public function adminprofile()
    {
		$id  = Auth::user()->id;
		/* $data = DB::table("course")->where('id', $id)->get(); 
		//dd($course,$data); 
        return view('adminprofile');
    }
	
	public function regindex($id)
    {
		$input = course::findOrFail($id);
        return view('register',compact("input"));
    }
	
	public function display(Requests\coursedetails $request,$id)
    {
		
			$input  =  new coursedetails;
			$getname = Input::get("coursename");
			$input->coursename = $getname;
			$input->dateofjoin = Input::get("dateofjoin");
			
			$fees = array(
				'java' => 1300,
				'c' => 1100,
				'html' => 1400,
				'javascript' => 1600,
				'php' => 1700,
				'python' => 1900,
				'bootstrap' => 1500,
				'beautifulsoup' => 2000,
				'c++' => 1200,
			);
			
			$cid = array(
				'java' => 1021616,
				'c' => 1021614,
				'html' => 1021617,
				'javascript' => 1021619,
				'php' => 1021621,
				'python' => 1021622,
				'bootstrap' => 1021618,
				'beautifulsoup' => 1021620,
				'c++' => 1021615,
			
			);
			
			
			$input->courseid = $cid[$getname];
			$input->fees = $fees[$getname];
			$input->id = $id;
			$input->userid = $input->id;
						
			$data = course::find($id);

			$input['name'] = $data->name;
			$input['email'] = $data->email;
						
			
			Mail::send('mail', ['input' => $input], function($message) use ($input)
				{	
					$message->from('ganeshjayaram97@gmail.com','Ganesh');
					$message->to($input->email, $input->name)->subject('Welcome to my Bhoologam :p !');
				}); 
				
			unset($input['email']);
			unset($input['name']);
			
			$input->save();
			
		if(Auth::guest()) {
			return Redirect::to('/home');
		}
			else {
				return Redirect::to('/home');
			}
			
    } */
}
