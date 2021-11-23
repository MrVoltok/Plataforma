<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
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

    public function store(Request $request ){

        $this->validate(request(), [
            'name' => 'required',
            'lastname' => 'required',
            'job' => 'required',
            'email' => 'required|email',
	    'password' => 'required|length',
	    'image' => 'required|image'
        ]);
	$imagen = $request->file('image')->store('public');
	$url = Storage::url($imagen);
	$user = User::create(request(['name','lastname','job','email','password','image']));
	$user->image=$url;
	$user->save();

        auth()->login($user);
        return redirect()->to('/');
    }

    public function message(){
        return[
            'length' => 'La contraseña debe tener al menos 6 caracteres'
        ];
    }

}
