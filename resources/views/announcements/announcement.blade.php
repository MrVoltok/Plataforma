@extends('layouts.app')

@section('title', 'Convocatorias')

@section('home')
<link rel="stylesheet" href="/css/Announcements/style_announcements.css">
{{-- Convocatorias --}}
<div class="announce">
    {{-- banner --}}
    <div class="banner-announce">
        <p class="banner-text">Convocatorias</p>
        <div class="create-announce">
            <i class='bx bxs-megaphone'></i>
            <i class='bx bx-plus'></i>
        </div>
        <div class="notification">
            <i class='bx bxs-bell'></i>
        </div>
    </div>
    {{-- seccion de Convocatorias --}}
    <div class="section-announce">
        {{-- lista de convocatorias --}}
        <ul class="list-announce">
            <li class="info-announce">
                <img src="/images/img_groups/groupImg-default.png" alt="">
                <div class="info">
                    <p>Título</p>
                    <p>Descripcion</p>
                </div>
            </li>
        </ul>
    </div>
    {{-- Descripcion de la convocatoria --}}
    <div class="description">
        Funciones por implementar
    </div>
</div>
@endsection