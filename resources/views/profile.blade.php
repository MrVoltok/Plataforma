@extends('layouts.app')

@section('home')
<link rel="stylesheet" href="/css/style_profile.css">
<!-- Perfil de usuario -->
<div class="profile-section">
    <div class="profile-banner">
        <img src="/images/vlll.jpg" alt="">
    </div>
    <div class="profile-additional-details">
        <div class="profile-mainDetails">
            <p class="profile-username">{{auth()->user()->name}}</p>
            <p class="profile-job">Ocupación</p>
        </div>
        <div class="profile-presentation">
            <p class="titles">Presentación</p>
            <i class='bx bx-edit'></i>
            <span class="profile-infoBox">Ingrese una breve presentación suya</span>
        </div>
        <div class="profile-currentGroups">
            <p class="titles">Mis grupos</p>
            <ul class="profile-infoBox">
                <li>Grupo 1</li>
                <li>Grupo 2</li>
                <li>Grupo 3</li>
            </ul>
        </div>
    </div>
</div>
@endsection