@extends('layouts.app')

@section('title', 'Grupos')

@section('home')
<link rel="stylesheet" href="/css/Groups/style_groups.css">
<!-- Equipos -->
<div class="teams-section">
    <div class="group-banner">
        <p class="banner-text">Grupos</p>
        <div class="create-group">
            <a href="{{route('groups.create')}}">
                <i class='bx bxs-group'></i>
                <i class='bx bx-plus'></i>
            </a>
        </div>
        <div class="notification">
            <i class='bx bxs-bell'></i>
        </div>
    </div>
    <div class="personal-groups">
        <p class="personal-groupsT">Mis grupos</p>
        <!-- <i class='bx bx-chevron-down'></i> -->
    </div>
    <ul class="group-boxes">
        @foreach ($groups as $group)
            <li class="team">
                <a href="{{route('ingroup.index')}}">
                    <div class="team-image">
                        <img src="/images/img_groups/groupImg-default2.png" alt="">
                    </div>
                    <div class="team-info">
                        <div class="info">
                            <p>{{$group->name}}</p>
                            <p>Grupo de colaboración</p>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</div>  
@endsection