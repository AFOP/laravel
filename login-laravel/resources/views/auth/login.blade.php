@extends('layouts.outapp-master')

@section('content')
<div class="container mt-3">
    <form class="row mx-auto col-md-4 justify-content-center" action="/login" method="POST">
        @csrf
        <h1>Login</h1>
        @include('layouts.partials.messages')
        <div class="mb-3">
            <label for="username" class="visually-hidden">Username/email</label>
            <input type="text" name="username" class="form-control" id="username" placeholder="email@example.com">
        </div>
        <div class="mb-3">
            <label for="login" class="visually-hidden">Password</label>
            <input type="password" name="password" class="form-control" id="login" placeholder="Password">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3" value="login">Ingresar</button>
        </div>
        <div class="mb-3">
            <a href="/register" style="text-align: right; display: block;">Registrarse</a>
        </div>
    </form>
</div>
@endsection