<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use App\user;


class faculty_details extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = "faculty_details";
	 
    protected $fillable = [
         'coursename','courseid','facultyid','id',
    ];
	
	public static $validation_rules = [
	'email' => 'required|unique:course,email',
	'password' => 'required|max:15',
	];

	public function isAdmin()
    {
        return $this->is_admin;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token',
    ];
	
}
