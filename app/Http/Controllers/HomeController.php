<?php

namespace App\Http\Controllers;

use App\user;
use App\data;
use DB;
use Redirect;
use dateTime;
use App\studentcoursedetails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use Input;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function adminindex()
    {
        return view('adminhome');
    }
	
	public function apphome()
    {
        return view('apphome');
    }

	
	public function adminprofile()
    {
		$id  = Auth::user()->id;
		/* $data = DB::table("course")->where('id', $id)->get(); 
		//dd($course,$data); */
        return view('adminprofile');
    }
	
  public function getHome() {
		$user_get = Auth::user();
		return view('bloghome');
	}	
	
	public function getexams() {
		$sum = 0;
		$id = Auth::user()->id;
		$get = Auth::user()->getdetails->sum('fees');
		$data = DB::table('studentcoursedetails')->where('id',$id)->get();
		return view('fees',compact("get","data"));
	}		
	
}
