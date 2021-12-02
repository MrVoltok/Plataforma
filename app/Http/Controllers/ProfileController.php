<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * @return view Retorna la vista al perfil del usuario
     */
    public function index(){
        return view('profile');
    }
}
