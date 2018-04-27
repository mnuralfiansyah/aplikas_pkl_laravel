<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Socialite;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class FBLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();
		$findUser = User::where('email',$user->getEmail())->first();
		if($findUser)
		{
			Auth::login($findUser);
			return redirect('home');
		}
	
		return redirect('login');
		
    }
}