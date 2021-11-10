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
                <input class="controls" type="text" name="group-name" placeholder="Nombre">
            </div>
            <div class="field">
                <p class="field-text">Descripción</p>
                <input class="controls" type="text" name="group-description" placeholder="Descripción">
            </div>
            <div class="field-specs">
                <div class="field-options">
                    <p class="field-text">Área(s) de estudio</p>
                    <p class="field-text">Ocupación</p>
                    <div class="area">
                        <span>
                            Libre
                            <i class='bx bx-chevron-down'></i>
                            <ul>
                                <li id="libre">Libre</li>
                                <li id="salud">Ciencias de la salud</li>
                                <li id="exactas">Ciencias exactas</li>
                                <li id="naturales">Ciencias naturales</li>
                                <li id="sociales">Ciencias sociales</li>
                                <li id="humanidades">Humanidades</li>
                            </ul>
                        </span>
                    </div>
                </div>
            </div>

            <!-- <input class="controls" type="text" name="filter-group-area" placeholder="Área">
                    <ul>
                        <li><button>Ciencias de la Salud</button></li>
                        <li><button>Ciencias exactas</button></li>
                        <li><button>Ciencias Naturales</button></li>
                        <li><button>Ciencias Sociales</button></li>
                        <li><button>Libre</button></li>
                    </ul>
                    <input class="controls" type="text" name="filter-group-area" placeholder="Ocupación">
                    <input type="submit" value="Confirmar"> -->
            <!-- <div class="group-image">
                Subir una imagen
            </div> -->
            <div class="tags">
                <p class="field-text">Campos de estudio seleccionados:</p>
                <ul>
                    <li>
                        <p id="salud">otorrinolaringología</p>
                    </li>
                    <li>
                        <p id="exactas">Astrofísica</p>
                    </li>
                    <li>
                        <p id="naturales">Entomología</p>
                    </li>
                    <li>
                        <p id="sociales">Antropología</p>
                    </li>
                    <li>
                        <p id="humanidades">Hepistemología</p>
                    </li>
                    <li>
                        <p id="libre">Libre</p>
                    </li>
                </ul>
            </div>
            <div class="confirm-create-group">
                <input type="submit" value="Crear grupo">
            </div>
        </div>
    </div>
</div>
@endsection