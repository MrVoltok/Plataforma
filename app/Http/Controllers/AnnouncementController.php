<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    /**
     * @return view Retorna la vista a la lista de convocatorias
     */
    public function index(){
        return view('announcements.announcement');
    }

    /**
     * @return view Retorna a la vista para crear una convocatoria
     */
    public function create(){
        return view('announcements.create_Announcement');
    }
}
