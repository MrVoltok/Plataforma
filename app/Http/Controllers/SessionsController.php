<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller{
    
    /**
     * @return view Retorna la vista al formulario de inicio de sesión
     */
    function index(){
        return view('auth.login');
    }

    /**
     * Evalua la autenticidad del correo con su correspondiente contraseña
     * @return mixed
     */
    public function store(){

        if(auth()->attempt(request(['email','password'])) == false){
            return back()->withErrors([
                'message' => 'Correo o contraseña incorrectos'
            ]); 
        }
        return redirect()->to('/');
    }

    /**
     * Cierra la sesión del usuario
     * @return view
     */
    public function destroy(){
        auth()->logout();
        return redirect()->to('/login');
    }
}
