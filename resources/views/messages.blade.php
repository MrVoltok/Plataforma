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
    <div class="chat-boxes" id="chat-boxes">
        <li class="received">
            <p class="user-message"><b>Username</b></p>
            <p class="text-messageR">Hola</p>
        </li>
    </div>
    <div class="isTyping">
        {{-- <div class="isTyping-box">
            <p class="text-message">User está escribiendo...</p>
        </div> --}}
    </div>
    <form class="text-box" id="message_form">
        <input type="text" name="message" id="message_input" placeholder="Enviar un mensaje...">
        <input type="hidden" name="username" id="username_input" value="{{auth()->user()->name}}">
        <button type="submit" id="message_send">
            <i class='bx bxs-send'></i>
        </button>
    </form>
</div>

<script src="/js/app.js"></script>
@endsection