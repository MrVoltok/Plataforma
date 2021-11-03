<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupsController extends Controller{
    public function index(){
        return view('Groups.homeGroup');
    }

    public function create(){
        return view('Groups.createGroup');
    }
}
