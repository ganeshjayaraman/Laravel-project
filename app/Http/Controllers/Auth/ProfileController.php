<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\userdetails;
use App\user;
use App\studentcoursedetails;
use App\faculty;
use App\faculty_details;
use Input;
use DB;
use Redirect;
use dateTime;
use Validator;
use Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class ProfileController extends Controller
{
    public function createadminprofile()
    {
        return $this->adminshowProfileForm();
    }
	
	public function adminshowProfileForm()
    {
     
        return view('auth.createadminprofile');
    }
	
	public function registeradminprofile(Request $request)
    {	
        return $this->regadminprofile($request);
    }
	
	public function regadminprofile(Request $request)
    {
		$birthdate = new DateTime($request->get('dob'));
		$today   = new DateTime('today');
		$age = $birthdate->diff($today)->y; 
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|exists:user',
            'dob' => 'required|date',
			'address' => 'required',
			'profpic' => 'required',
			'state' => 'required',
			'country' => 'required',
			'prevclg' => 'required',
			'details' => 'required',
        ]);
			
		$data = $request->all();
		
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
	
        faculty::create([
			'id' => Auth::user()->id,
            'dob' => $data['dob'],
			'age' => $age,
			'address' => $data['address'],
			'profpic' => $data['profpic'],
			'state' => $data['state'],
			'country' => $data['country'],
			'prevclg' => $data['prevclg'],
			'details' => $data['details'],
        ]);


		if(Auth::check())
			return redirect('/adminhome');
		else
			return redirect('/');		
    }
	
	public function adminprofile() {
		$id = Auth::user()->id;
		$data = faculty::find($id);
		if($data)
		return view("adminprofile",compact("data"));
		else 
			return view("auth.createadminprofile");
	}
	
	// user profile
	
	public function profile()
    {
		$id  = Auth::user()->id;
		$data =  userdetails::find($id);
		$course = DB::table('studentcoursedetails')->where('id',$id)->get();
		if($data && $course)
			return view('profile',compact("data","course"));
		else
			return view('auth.createprofile');
    }
	
	
	public function createprofile()
    {
        return $this->showProfileForm();
    }
	
	public function showProfileForm()
    {
     
        return view('auth.createprofile');
    }
	
	public function registerprofile(Request $request)
    {	
        return $this->regstudentprofile($request);
    }
	
	public function regstudentprofile(Request $request)
    {
		$birthdate = new DateTime($request->get('dob'));
		$today   = new DateTime('today');
		$age = $birthdate->diff($today)->y; 
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|exists:user',
			'email' => 'required|email|exists:user',
            'dob' => 'required|date',
			'address' => 'required',
			'profpic' => 'required',
			'state' => 'required',
			'country' => 'required',
			'college' => 'required',
			'studentstate' => 'required',
        ]);
			
		$data = $request->all();
		
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
	
        userdetails::create([
			'id' => Auth::user()->id,
            'dob' => $data['dob'],
			'age' => $age,
			'address' => $data['address'],
			'profpic' => $data['profpic'],
			'state' => $data['state'],
			'country' => $data['country'],
			'college' => $data['college'],
			'studentstate' => $data['studentstate'],
        ]);


		if(Auth::check())
			return redirect('/home');
		else
			return redirect('/');		
    }
	
	public function regindex()
    {
		$id = Auth::user()->id;
		$input = user::findOrFail($id);
        return view('register',compact("input"));
    }
	
	public function display(Requests\studentcoursedetails $request,$id)
    {	
			$input  =  new studentcoursedetails;
			$getname = Input::get("coursename");
			$course = array(
			'id' => $id,
			'coursename' => $getname
			);
			$getdata = \DB::table('studentcoursedetails')->where($course)->get();
			if($getdata){
				return Redirect::to('home')->with('errors',"The course ".$getdata[0]->coursename." had alreay been taken by you");
			}
			else{
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
						
			$data = user::find($id);

			$input['name'] = $data->name;
			$input['email'] = $data->email;
						
			
			Mail::send('mail', ['input' => $input], function($message) use ($input)
				{	
					$message->from('ganeshjayaram97@gmail.com','Ganesh');
					$message->to($input->email, $input->name)->subject('Course Joined Message !');
				}); 
				
			unset($input['email']);
			unset($input['name']);
			
			$input->save();
			
		if(Auth::check()) {
			$getdata = \DB::table('studentcoursedetails')->where($course)->get();
			return Redirect::to('/home')->with('error',"The course for ".$getdata[0]->coursename." has been succesfully registered ");
		}
			else {
				return Redirect::to('/');
			}
	}		
    }
	
	
	public function facregindex($id)
    {
		$input = user::findOrFail($id);
        return view('facregister',compact("input"));
    }
	
	public function facdisplay(Requests\faculty_details $request,$id)
    {	
			$input  =  new faculty_details;
			$getname = Input::get("coursename");
			$input->coursename = $getname;
			
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
			$input->id = $id;
			$input->facultyid = $input->id;					
			$input->save();
			
		if(Auth::check()) {
			return Redirect::to('/adminhome');
		}
			else {
				return Redirect::to('/');
			}
    }
	
	
	public function getstudents($id){
		$get = DB::table('faculty_details')->where('id',$id)->get();
		$courseid =  $get[0]->courseid;
		$get = DB::table('studentcoursedetails')->where('courseid',$courseid)->get();
		dd($get[0]);
	}
	
	protected function getFailedLoginMessage()
    {
        return Lang::has('auth.failed')
                ? Lang::get('auth.failed')
                : 'This Course had already been taken.';
    }
	
	public function coursename()
    {
        return property_exists($this, 'coursename') ? $this->coursename : 'email';
    }
	
}
