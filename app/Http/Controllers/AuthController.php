<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Rules\Username;

class AuthController extends Controller
{
    function loginView()
    {
        return view("login");
    }

    function registerView()
    {
        return view("register");
    }

    function doLogin(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required', // required and number field validation

        ]); 
		$request->validate([
			'username' => ['required', new Username],
		]);
        if ($validator->fails())
        {

            return back()->withInput()->withErrors($validator);

        } else {
            if (\Auth::attempt($request->only(["username", "password"]))) {
                return redirect("loan-details")->with('success', 'Login Successful');
            } else {
                return back()->withErrors( "Invalid credentials"); // auth fail redirect with error
            }
        }
    }

   

    // logout method to clear the sesson of logged in user
    function logout()
    {
        \Auth::logout();
        return redirect("login")->with('success', 'Logout successfully');;
    }
}