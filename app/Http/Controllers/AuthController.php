<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\AuthenticateUser;

use App\Http\Requests;

use Socialite;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //~ public function login(AuthenticateUser $authenticateUser, Request $request){
    public function login(){
		//~ $authenticateUser->execute($request->has('code'));
		//~ return Socialite::with('sharepoint')->redirect();
		return Socialite::driver('sharepoint')->redirect();
		//~ $user = Socialite::driver('sharepoint')->user(); 
		//~ $accessTokenResponseBody = $user->accessTokenResponseB
	}
	
	public function login_dump(){
		$user = Socialite::driver('sharepoint')->user();
		if($user){
		echo "<pre>"; print_r($user);
		}else echo"failed";
			  die; 
		return $user;
	}
	
}

