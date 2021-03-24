<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginPage() {
        

        return view('login',[]);
    }

    public function passwordReset() {
        return redirect('https://google.ch');
    }

    public function registerPage(){

        return view('register', []);
    }
}
