@extends('layouts.app')

@section('title', 'Convocatorias')

@section('home')
<link rel="stylesheet" href="/css/Announcements/style_announcements.css">
<div class="announce">
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
    <div class="section-announce">
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
    <div class="description">
        Funciones por implementar
    </div>
</div>
@endsection