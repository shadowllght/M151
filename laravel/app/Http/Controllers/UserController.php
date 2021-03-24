<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginPage($email, $password) {
        if($email->email && $password->password){
            return view('login',[]);
        }
        else new Exception("Credentials don't match");
        return view('login', []);
    }

    /*public function passwordReset() {
        return redirect('https://google.ch');
    }*/

    public function registerPage(){

        return view('register', []);
    }

    public function logoutPage(){
        return view('logout', []);
    }

    public function registerUser(Request $request) {
        $email = $request->input("email");
        $password = $request->input("password");
        
        
        return redirect('/login');

        
        /*try {
    
            $statement->execute(
        [
            ':email' => $email,
            ':password' => $password,
        ]
    );
}
    catch(Exception $e){
    echo('Registration failed');
}
*/
    }
}

