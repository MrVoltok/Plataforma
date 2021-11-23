@extends('layouts.app')

@section('title', 'Mensajes')

@section('home')
<link rel="stylesheet" href="/css/style_messages.css">
<!-- CHATS -->
<div class="chat-section">
    <div class="chatlist-banner">
        Mensajes
    </div>
    <ul class="list">
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>Ok, entonces nos avisas ...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="/images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo</p>
                <p>...</p>
            </div>
        </li>
    </ul>
</div>  

<div class="chat-area">
    <div class="chat-profileBanner">
        <img src="/images/foto_default.jpg" alt="">
        <p>Equipo 4</p>
    </div>
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
    <div class="isTyping">
        <div class="isTyping-box">
            <p class="text-message">User está escribiendo...</p>
        </div>
    </div>
    <div class="text-box">
        <input type="text" placeholder="Enviar un mensaje...">
    </div>
</div>
@endsection