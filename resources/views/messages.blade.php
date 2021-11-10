@extends('layouts.app')

@section('home')
<link rel="stylesheet" href="/css/style_messages.css">
<!-- CHAT -->
<div class="chat-section">
    <div class="chatlist-banner">
        Mensajes
    </div>
    <ul class="list">
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>Ah como shinga</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
                <p>...</p>
            </div>
        </li>
        <li>
            <img src="../images/foto_default.jpg" alt="">
            <div class="chat-miniDetails">
                <p class="chat-usernameSnd">Equipo 4</p>
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