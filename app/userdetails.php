<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\user;


class userdetails extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = "userdetails";
	 
    protected $fillable = [
			'profpic','state','college','country','studentstate','address','dob','age','id'
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
	
	public function getbackprof() {
		return $this->belongsTo('App\user',"id");
	}
	
}
