@extends('layouts.app')

@section('title', 'Perfil')

@section('home')
{{-- <img src="/images/vlll.jpg" alt=""> --}}
{{-- <p class="profile-username">{{auth()->user()->name}}</p> --}}

<link rel="stylesheet" href="/css/style_profile.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
{{-- Perfil de usuario --}}
<div class="profile-section">
    {{-- banner --}}
    <div class="profile-banner">
        <div class="banner-img">
            <img src="{{auth()->user()->image}}" alt="">
            <i class='bx bxs-image-add' id="change_profileImg"></i>
        </div>
        <div class="icon">
            <i class='bx bxs-image-add' id="change_personalBannerImg"></i>
        </div>
    </div>
    {{-- Datos --}}
    <div class="profile-additional-details">
        <div class="profile-mainDetails">
            <p class="profile-username">{{auth()->user()->name." ".auth()->user()->lastname}}</p>
            <p class="profile-job">{{auth()->user()->job}}</p>
        </div>
        {{-- presentación --}}
        <div class="profile-presentation">
            <div class="profile-presentationHead">
                <p class="titles">Presentación</p>
                <i class='bx bx-edit'></i>
            </div>
            <span class="profile-infoBox">Ingrese una breve presentación suya</span>
        </div>
        {{-- grupos --}}
        <div class="profile-currentGroups">
            <p class="titles">Mis grupos</p>
            <ul class="profile-infoBox">
                <li>Proyecto Plataforma</li>
                <li>Estudio del campo magnético</li>
            </ul>
        </div>
    </div>
</div>
@endsection