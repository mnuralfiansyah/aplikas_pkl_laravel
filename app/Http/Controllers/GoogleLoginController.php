<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class GoogleLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();
		$findUser = User::where('email',$user->getEmail())->first();
		
		if($findUser)
		{
			Auth::login($findUser);
			return redirect('home');
		}
	
		return redirect('login');		
    }
}