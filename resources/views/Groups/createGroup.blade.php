@extends('layouts.app')

@section('title', 'Crear grupo')

@section('home')
<link rel="stylesheet" href="/css/Groups/style_crtgroup.css">
<link rel="stylesheet" href="/css/Groups/style_groups.css">
<!-- Equipos -->
<div class="teams-section">
    <div class="group-banner">
        <p class="banner-text">Grupos</p>
        <div class="notification">
            <i class='bx bxs-bell'></i>
        </div>
    </div>
    <div class="create-group-section">
        <p>Crear un grupo</p>
	<form class="create-group-form" action="{{route('groups.store')}} " method ="POST">
	    @csrf 
            <div class="field">
                <p class="field-text">Nombre del grupo</p>
                <input class="controls" type="text" name="name" id="name" required>
            </div>
            <div class="field">
                <p class="field-text">Descripción</p>
                <input class="controls" type="text" name="description" id="description" required>
            </div>
            {{-- <div class="field">
                <p class="field-text">Ocupación</p>
                <div class="field-options">
                    <input class="controls" type="text" name="major" placeholder="Área" id ="major" required>
                    <input class="controls" type="text" name="degree" placeholder="Ocupación" id = "degree" required>
                   <!-- <input type="submit" value="Confirmar" required>-->
                </div>
            </div> --}}
            <!-- <div class="group-image">
                Subir una imagen
            </div> -->
            <div class="confirm-create-group">
                <input type="submit" value="Crear grupo">
            </div>
        </form>
    </div>
</div>
@endsection
