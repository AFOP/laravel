@extends('components.app-master')

@section('content')
    <main class="container">
        <h1>Perfil profesional de User</h1>
        @include('components.messages')
        <form method="POST" action="{{ route('profile') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción del perfil</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
        </form>
    </main>
@endsection
