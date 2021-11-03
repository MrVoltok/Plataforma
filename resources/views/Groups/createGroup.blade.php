@extends('layouts.app')

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
        <div class="create-group-form">
            <div class="field">
                <p class="field-text">Nombre del grupo</p>
                <input class="controls" type="text" name="group-name">
            </div>
            <div class="field">
                <p class="field-text">Descripción</p>
                <input class="controls" type="text" name="group-description">
            </div>
            <div class="field">
                <p class="field-text">Área(s) de estudio</p>
                <div class="field-options">
                    <input class="controls" type="text" name="filter-group-area" placeholder="Área">
                    <input class="controls" type="text" name="filter-group-area" placeholder="Ocupación">
                    <input type="submit" value="Confirmar">
                </div>
            </div>
            <!-- <div class="group-image">
                Subir una imagen
            </div> -->
            <div class="confirm-create-group">
                <input type="submit" value="Crear grupo">
            </div>
        </div>
    </div>
</div>
@endsection