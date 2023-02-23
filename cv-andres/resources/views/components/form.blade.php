<form>
    @foreach ($profiles as $profile)
        @if ($profile->user == "Juan")
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Título</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" Value="{{ $profile->title }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" Value="{{ $profile->description }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" Value="{{ $profile->user }}" disabled>
            </div>
        @endif
    @endforeach
</form>
