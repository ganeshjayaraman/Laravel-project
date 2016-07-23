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
	 protected $table = "studentcoursedetails";
	 
    protected $fillable = [
        'dateofjoin', 'coursename','courseid','fees','userid','id',
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
		return $this->belongsTo("App\user","id");
	}
}
