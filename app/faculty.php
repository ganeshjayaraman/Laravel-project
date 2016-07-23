<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\user;


class faculty extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	 protected $table = "faculty";
	 
    protected $fillable = [
         'profpic','state','prevclg','country','details','address','dob','mobile','age','id'
    ];
	
	public static $validation_rules = [
	'email' => 'required|unique:faculty,email',
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
		return $this->belongsTo("App\user","id");
	}
}
