<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data;
use Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class blogcontroller extends Controller
{
  public function newblog() {
	  return view("newblog");
  }
  
  public function postblogmethod() {
	  $blog = new data;
	  $blog->title = Input::get('title');
	  $blog->body = Input::get('content');
	  $blog->writerid = Auth::user()->id;
	  $blog->username = Auth::user()->name;
	  $blog->save();
	  return view("postedpage",compact("blog"));
  }
  
  public function readblog($bid) {
	  $reads = data::find($bid);
	  return view("read",compact('reads'));
  }
  
  public function editblog($bid){
	  $edit = data::find($bid);
	  return view("editpost",compact("edit"));
  }
  
  public function deleteblog($bid) {
	  $delete = data::find($bid);
	  return view("deletedblog",compact("delete"));
  }
  
  public function delblog($bid) {
	  $del = data::find($bid);
	  $del->delete();
	  return view("delpost");
  }
   public function posteditblog() {
	   $bid = Input::get("edit");
	  $blog = data::find($bid);
	  $blog->title = Input::get('title');
	  $blog->body = Input::get('content');
	  $blog->writerid = Auth::user()->id;
	  $blog->username = Auth::user()->name;
	  $blog->save();
	  return view("postedpage",compact("blog"));
  }
  
  public function getblog() {
		$blog = data::all();
		return view('allbloghome',compact("blog"));
	}	
  
}
