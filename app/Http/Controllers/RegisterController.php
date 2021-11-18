<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller{
    
    function index(){
        return view('auth.register');
    }

    public function store(){
        
        $this->validate(request(), [
            'name' => 'required',
            'lastname' => 'required',
            'job' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::create(request(['name','lastname','job','email','password']));

        auth()->login($user);
        return redirect()->to('/');
    }

}
