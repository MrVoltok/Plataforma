@extends('layouts.app')

@section('title', 'Grupo')

@section('home')
<link rel="stylesheet" href="/css/Groups/style_groups.css">
<link rel="stylesheet" href="/css/Groups/style_group.css">
<link rel="stylesheet" href="/css/style_messages.css">
<div class="teams-section">
    <div class="group-banner">
        <p class="banner-text">Grupos</p>
        <div class="notification">
            <i class='bx bxs-bell'></i>
        </div>
    </div>
    <div class="group-workspace">
        <div class="group-chat">
            <div class="chat-boxes">
                <li class="received">
                    <p class="user-message"><b>Username</b></p>
                    <p class="text-messageR">Hola</p>
                </li>
                <li class="sended">
                    <p class="text-message">Hola</p>
                    <p class="text-message">¿Tienes listas las vistas?</p>
                </li>
                <li class="received">
                    <p class="user-message"><b>Username</b></p>
                    <p class="text-messageR">Ya casi, hay problemas con unos botones pero puede funcionar</p>
                </li>
                <li class="sended">
                    <p class="text-message">Ok</p>
                </li>
                <li class="sended">
                    <p class="text-message">En ese caso ya podríamos iniciar con el CRUD</p>
                </li>
                <li class="sended">
                    <p class="text-message">Vayan chechando tutoriales para que esto sea rápido, porfa</p>
                </li>
                <li class="received">
                    <p class="user-message"><b>Username</b></p>
                    <p class="text-messageR">Va</p>
                </li>
                <li class="received">
                    <p class="user-message"><b>Username</b></p>
                    <p class="text-messageR">Ok, de paso creamos las tablas para la base de datos</p>
                </li>
                <li class="sended">
                    <p class="text-message">Sí</p>
                </li>
                <li class="received">
                    <p class="user-message"><b>Username</b></p>
                    <p class="text-messageR">De hecho en la parte de usuarios falta almacenar las imagenes que suba el usuario</p>
                </li>
                <li class="sended">
                    <p class="text-message">¿Falta mucho para eso?</p>
                </li>
                <li class="received">
                    <p class="user-message"><b>Username</b></p>
                    <p class="text-messageR">No mucho, lo laborioso es la combinación con el html</p>
                </li>
                <li class="sended">
                    <p class="text-message">Ok, entonces nos avisas para que podamos empezar, porfa</p>
                </li>
            </div>
            <div class="text-box">
                <input type="text" placeholder="Enviar un mensaje...">
            </div>
        </div>
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
