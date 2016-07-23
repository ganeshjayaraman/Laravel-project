<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class data extends Model
{
    protected $table = "data";
	  protected $fillable = array('writerid','username','title', 'body');
		
	public function getback() {
		return $this->belongsTo("App\user","writerid");
	}
}
