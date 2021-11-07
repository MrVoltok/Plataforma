<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;

class GroupsController extends Controller{
    public function index(){
        return view('Groups.homeGroup');
    }

    public function create(){
        return view('Groups.createGroup');
    }

    public function store(Request $request)//Creamos un objeto de tipo Request que almacena la info que se obtiene de post en una variable
    {
	//return $request->all();
	    $grupo = new Grupo();

	    $grupo->name = $request->name;
	    $grupo->description = $request->description;
	    $grupo->major = $request->major;
	    $grupo->degree = $request->degree;

	    $grupo->save();
	    return redirect()->route('groups.index');
	    
    }
}
