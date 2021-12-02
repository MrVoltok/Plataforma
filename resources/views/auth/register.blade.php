@extends('layouts.logs')

@section('title', 'Register')

@section('log')
<form class="form-section" method="POST" action="{{route('register.store')}} " enctype="multipart/form-data" >
    @csrf
    {{-- formulario de registro de usuario --}}
    <div class="form-register">
        <h4><center>Registro</center></h4>
        {{-- input --}}
        <div class="type-data">
            <input class="controls" type="text" name="name" id="nombres" placeholder="Nombre(s)">
            <input class="controls" type="text" name="lastname" id="apellidos" placeholder="Apellido(s)">
            <input class="controls" type="text" name="job" id="ocupacion" placeholder="Ocupación">
            <input class="controls" type="email" name="email" id="correo" placeholder="Correo electrónico">
            <input class="controls" type="password" name="password" id="contraseña" placeholder="Contraseña">
            <input class="controls" type="password" name="password_confirmation" id="confirm_contraseña" placeholder="Confirme su Contraseña">

	    <p>Foto de perfil</p>
            <input type="file" name="image" id="" accept="image/*">
            <p><br></p>

		 @error('message')
                <div class="error_log" id="error_log">
                    {{$message}}
                    Error
                </div>
            @enderror
            {{-- boton --}}
            <center><button type="submit" id="register_user">Registrarse</button></center>
            <center><p class="to_log"><a href="{{route('login.index')}}">Ya tengo una cuenta</a></p></center>
      </div>
    </div>
</form>
@endsection
