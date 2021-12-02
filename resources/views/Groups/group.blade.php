@extends('layouts.app')

@section('title', 'Grupo')

@section('home')
<link rel="stylesheet" href="/css/Groups/style_groups.css">
<link rel="stylesheet" href="/css/Groups/style_group.css">
<link rel="stylesheet" href="/css/style_messages.css">
{{-- grupo --}}
<div class="teams-section">
    <div class="group-banner">
        <p class="banner-text">Grupos</p>
        <div class="notification">
            <i class='bx bxs-bell'></i>
        </div>
    </div>
    {{-- espacio de trabajo del grupo --}}
    <div class="group-workspace">
        {{-- seccion del chat --}}
        <div class="group-chat">
            <div class="chat-boxes">
                <li class="received">
                    <img src="{{auth()->user()->image}}" id="user-img" alt="">
                    <div class="text">
                        <p class="user-message"><b>Username</b></p>
                        <p class="text-messageR">Hola</p>
                    </div>
                </li>
            </div>
            <div class="text-box">
                <input type="text" placeholder="Enviar un mensaje...">
            </div>
        </div>
        {{-- informacion del grupo --}}
        <div class="group-info">
            <div class="group-info-img">
                <img src="{{$team->image}}" alt="">
            </div>
            <div class="group-info-description">
                <p id="group-title">{{$team->name}}</p>
                <p id="group-description">{{$team->description}}</p>
            </div>
            <ul id="group-info-listMember">
		<p class="group-info-listMemberTitle">Integrantes</p>
		<!--
                <li>
                    <p>Iván Juarez</p>
                </li>
                <li>
                    <p>Jessica Hernández</p>
                </li>
                <li>
                    <p>Jesus Caro</p>
                </li>
                <li>
                    <p>Joselyn Baez</p>
                </li>
                <li>
                    <p>Mauricio Jurado</p>
                </li>
                <li>
                    <p>Ricardo García</p>
                </li>
                <li>
                    <p>Sebastián Corro</p>
                </li>
                <li>
                    <p>Victor Ramírez</p>
		</li>
		-->
            </ul>
        </div>
    </div>
</div>
@endsection
