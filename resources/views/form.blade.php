<x-layout>
    <div class="container">
        <h1>Inserisci la tua canzone!</h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        <form method="POST" action="{{route('postSong')}}">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Artista</label>
                <input type="text" class="form-control" name="singer">
            </div>
            <div class="mb-3">
                <label class="form-label">Anno</label>
                <input type="text" class="form-control" name="year">
            </div>
            <div class="mb-3">
                <label class="form-label">Durata</label>
                <input type="text" class="form-control" name="minutes">
            </div>
            
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>

    </div>
</x-layout>