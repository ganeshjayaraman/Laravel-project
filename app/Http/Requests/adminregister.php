<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class adminregister extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required|unique:faculty',
		  'dob' => 'required',
		  'state' => 'required',
		  'country' => 'required',	
		  'state' => 'required',
		  'mobile' => 'required',
		  'name' => 'required|unique:faculty',
		  'email' => 'required|unique:faculty,email',
		  'password' => 'required|max:60',
		  'password_confirmation' => 'required|confirmed'
        ];
    }
}
