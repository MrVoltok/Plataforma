<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style_sidebar.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <i class='bx bx-group'></i>
                <a href="{{route('homepage')}}">
                    <div class="logo_name">Plataforma</div>
                </a>
            </div>
        </div>
        <ul class="nav_list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Buscar...">
            </li>
            <li>
                <a href="{{route('groups.index')}}">
                    <i class='bx bxs-group'></i>
                    <span class="links_name">Grupos</span>
                </a>
            </li>
            <li>
                <a href="{{route('messages.index')}}">
                    <i class='bx bxs-message-dots' ></i>
                    <span class="links_name">Mensajes</span>
                </a>
            </li>
            <li>
                <a href="{{route('announcement.index')}}">
                    <i class='bx bxs-megaphone' ></i>
                    <span class="links_name">Convocatorias</span>
                </a>
            </li>
            <li>
                <a href="archivos.html">
                    <i class='bx bxs-folder-open'></i>
                    <span class="links_name">Archivos</span>
                </a>
            </li>
            <li>
                <a href="foros.html">
                    <i class='bx bxs-message-error' ></i>
                    <span class="links_name">Foros</span>
                </a>
            </li>
            <li>
                <a href="apuntes.html">
                    <i class='bx bxs-edit-alt' ></i>
                    <span class="links_name">Notas</span>
                </a>
            </li>
            <li>
                <a href="calendario.html">
                    <i class='bx bx-calendar' ></i>
                    <span class="links_name">Calendario</span>
                </a>
            </li>
        </ul>
        <div class="profile_content">
            <div class="profile">
                <a href="{{route('profilePage.index')}}">
                    <div class="profile_details">
                        <img src="{{auth()->user()->image}}" alt="">
                        <div class="name_job">
                            <div class="name"><b>{{auth()->user()->name}}</b></div>
                            <div class="job">{{auth()->user()->job}}</div>
                        </div>
                    </div>
                </a>
                <a href="{{route('login.destroy')}}">
                    <i class='bx bx-log-out' id="log_out"></i>
                </a>
            </div>
        </div>
    </div>

    @yield('home')

</body>
</html>
