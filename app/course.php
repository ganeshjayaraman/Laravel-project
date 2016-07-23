<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;
use App\coursedetails;

class course extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = "course";
	 
    protected $fillable = [
         'email', 'password','name','profpic','state','college','country','studentstate','address','dob','mobile','age'
    ];
	
	public static $validation_rules = [
	'email' => 'required|unique:course,email',
	'password' => 'required|max:15',
	];

	

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];
	
	public function hasRegistered() {
		return $this->hasMany("App\coursedetails","id");
	}
}
