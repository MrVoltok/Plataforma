<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Storage;
class RegisterController extends Controller{

    /**
     * Constructor para el controlador del registro de usuario
     * @param ValidationFactory Parametro nativo de laravel para validar datos enviados al formulario
     * @return mixed
     */
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
    
    /**
     * Retorna la vista hacia el formulario de registro de usuario
     */
    function index(){
        return view('auth.register');
    }

    /**
     * Almacena los datos ingresados en el formulario de regustro de usuario
     * @param \Illuminate\Http\Request  $request
     * @return view Redirecciona a la ruta principal de la plataforma
     */
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

    /**
     * Contiene los mensajes de error que puedan suceder durante el regitro del usuario
     * @return array 
     */
    public function message(){
        return[
            'length' => 'La contraseña debe tener al menos 6 caracteres'
        ];
    }

}
