<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class GroupsController extends Controller{
    public function index(){
        $grupos = Grupo::all();
        return view('Groups.homeGroup',['groups'=>$grupos]);
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
	    // $grupo->major = $request->major;
	    // $grupo->degree = $request->degree;
	    
        $grupo->save();

        Echo "El grupo $grupo->name ha sido creado";
	    return redirect()->route('groups.index');
	    
    }

    public function ingroup(){
        return view('Groups.group');
    }
}
