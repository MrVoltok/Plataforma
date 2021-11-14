@extends('layouts.app')

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
    <div class="group-chat">
        <div class="chat-boxes">
            <li class="received">
                <p class="user-message"><b>Username</b></p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="sended">
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="received">
                <p class="user-message"><b>Username</b></p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="sended">
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="received">
                <p class="user-message"><b>Username</b></p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="sended">
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="received">
                <p class="user-message"><b>Username</b></p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="sended">
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="received">
                <p class="user-message"><b>Username</b></p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
                <p class="text-messageR">Lorem ipsum dolor sit amet.</p>
            </li>
            <li class="sended">
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
                <p class="text-message">Lorem ipsum dolor sit amet.</p>
            </li>
        </div>
        <div class="text-box">
            <input type="text" placeholder="Enviar un mensaje...">
        </div>
    </div>
    <div class="group-info">
        <img src="/images/img_groups/code-gb630950e3_640.png" alt="">
        <div class="group-info-description">
            <p id="group-title">Algoritmos</p>
            <p id="group-description">Grupo enfocado al análisis y diseño de algoritmos.</p>
        </div>
        <ul id="group-info-listMember">
            <p class="group-info-listMemberTitle">Integrantes</p>
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
        </ul>
    </div>
</div>
@endsection