<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
	// ✪ Developed By Tafadzwa Munyuki 
    function login(Request $req)
    {
    	$user= User::where(['email'=>$req->email])->first();
    	if(!$user || !Hash::check($req->password,$user->password))
    	{
    		return "Username or Password not matching";
    	}
    	else{
    		$req->session()->put('user', $user);
    		return redirect('/');
    	}
    }
    function register(Request $req)
    {
    	// return $req->input();
    	// Include fields to register(name, email, password)
    	$user = new User;
    	$user->name=$req->name;
    	$user->email=$req->email;
    	// Encrypt password
    	$user->password=Hash::make($req->password);
    	// Save data
    	// ✪ Developed By Tafadzwa Munyuki 
    	$user->save();

    	return redirect('/login');
    }
}
