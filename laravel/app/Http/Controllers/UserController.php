<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function checkLogin()
    {
        if (session()->get('userId')) {
            return true;
        } else return false;
    }

    public function loginPage()
    {

        return view('login', []);
    }

    public function login(Request $request)
    {
        $email = $request->input("email");
        $password = $request->input("password");

        $user_that_tries_to_log_in  = \App\Models\User::all()->where("email", "=", $email)->first();

        if ($user_that_tries_to_log_in == null) {
            return "user not found";
        }

        if ($password == $user_that_tries_to_log_in->password) {
            session()->put('userId', $request->id);
            return redirect("/products");
        } else {
            return "wrong password";
        }
    }
    public function registerPage()
    {

        return view('register', []);
    }

    public function logoutPage()
    {
        return view('logout', []);
    }

    public function registerUser($userData)
    {
        $user = new \app\Models\User;

        $user->email = $userData->email;
        $user->password = Hash::make($userData->password);
        $user->first_name = $userData->first_name;
        $user->last_name = $userData->last_name;
        $user->street = $userData->street;
        $user->city = $userData->city;
        $user->zip = $userData->zip;
        $user->phone = $userData->phone;

        if ($user->save()) {
            $this->loginUser($userData->email, $userData->password);
            return true;
        } else return false;

        return redirect('/login');
    }
}
