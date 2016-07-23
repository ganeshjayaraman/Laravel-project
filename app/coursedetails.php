<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\user;
use App\userdetails;

class studentcoursedetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = "coursedetails";
	 
    protected $fillable = [
        'dateofjoin', 'coursename','courseid','fees','userid'
    ];
	
	public static $validation_rules = [
	'coursename' => 'required|unique:coursedetails',
	'email' => 'required|unique:course,email'
	];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];
	
	public function getdetails() {
		return $this->belongsTo("App\course","id");
	}
}
