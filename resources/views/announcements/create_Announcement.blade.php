@extends('layouts.app')

@section('title', 'Convocatorias | Crear')

@section('home')
<link rel="stylesheet" href="/css/Announcements/style_crtAnnouncement">
{{-- crear convocatoria --}}
<section class="crtConv">
    <div class="form-crtConv">
        {{-- input --}}
        <center><p class="crtConv-data" id="crtConv-h">Crear Convocatoria</p></center>
        <p class="crtConv-data" id="crtConv-Name">Titulo del grupo</p>
        <input class="controls" type="text" placeholder="Titulo del grupo">
        <p class="crtConv-data" id="crtConv-Description">Descripción del grupo</p>
        <input class="controls" type="text" placeholder="Descripción del grupo">
        {{-- botones --}}
        <div class="crtConv-Decision">
            <button type="submit" id="btn-Cancel">Cancelar</button>
            <button type="submit" id="btn-Accept">Lanzar convocatoria</button>
        </div>
    </div>
</section>
@endsection