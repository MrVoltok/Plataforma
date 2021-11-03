@extends('layouts.logs')

@section('login')
<form class="form-section" method="POST" action="">
    @csrf
    <div class="form-register">
        <h4><center>Registro</center></h4>
        <div class="type-data">
            <input class="controls" type="text" name="name" id="nombres" placeholder="Nombre(s)">
            <input class="controls" type="text" name="lastname" id="apellidos" placeholder="Apellido(s)">
            <input class="controls" type="email" name="email" id="correo" placeholder="Correo electrónico">
            <input class="controls" type="password" name="password" id="contraseña" placeholder="Contraseña">
            <input class="controls" type="password" name="password_confirmation" id="confirm_contraseña" placeholder="Confirme su Contraseña">
            @error('password')
                <div class="error_log" id="error_log">
                    {{$message}}
                </div>
            @enderror
            <center><button type="submit" id="register_user">Registrarse</button></center>
            <center><p class="to_log"><a href="{{route('login.index')}}">Ya tengo una cuenta</a></p></center>
      </div>
    </div>
</form>
@endsection