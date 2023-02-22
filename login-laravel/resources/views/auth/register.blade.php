@extends('layouts.outapp-master')

@section('content')
<div class="container mt-3">
    <form class="row mx-auto col-md-4 justify-content-center" action="/register" method="POST">
        @csrf
        <h1>Registarse</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="username" class="visually-hidden">Username/email</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="Nombre de usuario">
        </div>
        <div class="mb-3">
            <label for="email" class="visually-hidden">Username/email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="password" class="visually-hidden">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="visually-hidden">Confirmación de Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirmation Password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" value="Registrarse">Registrarse</button>
        </div>
        <div class="mb-3">
            <a href="/login" style="text-align: right; display: block;">Ingresar</a>
        </div>
    </form>
</div>
@endsection