<?php

namespace Illuminate\Foundation\Auth;

use DateTime;
use Input;
use App\user;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait RegistersUsers
{
    use RedirectsUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return $this->showRegistrationForm();
    }
	
	  public function admingetRegister()
    {
        return $this->adminshowRegistrationForm();
    }
	
	
	
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        if (property_exists($this, 'registerView')) {
            return view($this->registerView);
        }

        return view('auth.register');
    }

	public function adminshowRegistrationForm()
    {
     
        return view('auth.adminregister');
    }	
	
		
    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {	
        return $this->register($request);
    }
	
	public function adminpostRegister(Request $request)
    {	
        return $this->adminregister($request);
    }
	
	

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
		/* $birthdate = new DateTime($request->get('dob'));
		$today   = new DateTime('today');
		$age = $birthdate->diff($today)->y; */
        $validator = $this->validator($request->all());
		$status = 0;

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
		
        Auth::guard($this->getGuard())->login($this->create($request->all(),$status));

        return redirect($this->redirectPath());
    }
	
	public function adminregister(Request $request)
    {
		/* $birthdate = new DateTime($request->get('dob'));
		$today   = new DateTime('today');
		$age = $birthdate->diff($today)->y; */
        $validator = $this->validator($request->all());
		$status = 1;

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }
		
        Auth::guard($this->getGuard())->login($this->createadmin($request->all(),$status));

        return redirect($this->redirectPath());
    }
	

    /**
     * Get the guard to be used during registration.
     *
     * @return string|null
     */
    protected function getGuard()
    {
        return property_exists($this, 'guard') ? $this->guard : null;
    }
}
