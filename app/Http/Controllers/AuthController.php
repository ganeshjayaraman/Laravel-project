<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use App\course;
use Illuminate\Support\Facades\Mail;
use DateTime;
use Redirect;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Http\Requests;

class AuthController extends Controller
{
    public function loginpage() {
		return view('login');
	}
	
	public function index() {
		return view('studenthome');
	}
	
	public function mainpage(Requests\login $request) {
				
		$data = $request->only('email','password');
		
		if(\Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))){
			return Redirect::intended('/studenthome');
		}
		if(Auth::login($data)){
			return Redirect::intended('/studenthome');
		}
	}
	
	public function logoutmethod() {
		Auth::logout();
		return Redirect::to('/apphome');
}

}
