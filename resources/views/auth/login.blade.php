@extends('layouts.logs')

@section('title', 'Login')

@section('log')
<form class="form-log-section" method="POST" action="">
    @csrf
    <div class="form-login">
        <h4><center>Iniciar sesión</center></h4>
        <div class="type-data">
            <input class="controls" type="email" name="email" id="correo" placeholder="Correo electrónico">
            <input class="controls" type="password" name="password" id="contraseña" placeholder="Contraseña">
            @error('message')
                <div class="error_log" id="error_log">
                    Correo o contraseña incorrectos
                </div>
            @enderror
            <center>
                <button type="submit" id="log_user">Iniciar sesión</button>
            </center>
            <center><p><a href="{{route('register.index')}}">¿No tiene una cuenta?</a></p></center>
        </div>
    </div>
</form>
@endsection