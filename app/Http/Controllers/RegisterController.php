<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller{

    public function __construct(ValidationFactory $validationFactory){
        $validationFactory->extend(
            'length',
            function($attribute,$value,$parameters){
                if(strlen($value) >= 6)
                    return true;
                return back()->withErrors([
                    'message' => 'La contraseña debe tener al menos 6 caracteres'
                ]);
            }
        );
    }
    
    function index(){
        return view('auth.register');
    }

    public function store(){
        
        $this->validate(request(), [
            'name' => 'required',
            'lastname' => 'required',
            'job' => 'required',
            'email' => 'required|email',
            'password' => 'required|length',
        ]);

        $user = User::create(request(['name','lastname','job','email','password']));

        auth()->login($user);
        return redirect()->to('/');
    }

    public function message(){
        return[
            'length' => 'La contraseña debe tener al menos 6 caracteres'
        ];
    }

}
