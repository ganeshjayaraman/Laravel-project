<?php

namespace App;

use App\faculty;
use App\data;
use App\studentcoursedetails;
use Illuminate\Foundation\Auth\user as Authenticatable;

class user extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
	 
     */
	 
	protected $table = "user" ;
	
	protected $primaryKey  = "id";
	 
    protected $fillable = [
        'name', 'email', 'password','mobile','adminstatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function getprofile() {
		return $this->hasOne('App\faculty','id');
	}
	
	public function getstudentprofile() {
		return $this->hasOne('App\userdetails','id');
	}
	
	public function hasWritten() {
		return $this->hasMany("App\data","writerid");
	}
	
	public function getdetails() {
		return $this->hasMany('App\studentcoursedetails','id');
	}
	
}
