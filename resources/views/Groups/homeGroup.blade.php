@extends('layouts.app')

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
        <li class="team">
            <div class="team-image">
                <img src="/images/img_groups/brain-g48cd36ed5_640.png" alt="">
            </div>
            <div class="team-info">
                <div class="info">
                    <p>EEG</p>
                    <p>Grupo de investigación</p>
                </div>
            </div> 
        </li>
        <li class="team">
            <a href="{{route('ingroup.index')}}">
                <div class="team-image">
                    <img src="/images/img_groups/code-gb630950e3_640.png" alt="">
                </div>
                <div class="team-info">
                    <div class="info">
                        <p>Algoritmos</p>
                        <p>Grupo de investigación</p>
                    </div>
                </div>
            </a>
        </li>
        <li class="team">
            <div class="team-image">
                <img src="/images/img_groups/naranja.jpg" alt="">
            </div>
            <div class="team-info">
                <div class="info">
                    <p>HLB</p>
                    <p>Grupo de investigación</p>
                </div>
            </div>
        </li>
        <li class="team">
            <div class="team-image">
                <img src="/images/img_groups/azteca.png" alt="">
            </div>
            <div class="team-info">
                <div class="info">
                    <p>Civilizaciones</p>
                    <p>Grupo de investigación</p>
                </div>
            </div>
        </li>
        <li class="team">
            <div class="team-image">
                <img src="/images/img_groups/corazon.png" alt="">
            </div>
            <div class="team-info">
                <div class="info">
                    <p>Cardiología</p>
                    <p>Grupo de investigación</p>
                </div>
            </div>
        </li>
    </ul>
</div>  
@endsection