<x-layout>
    <x-slot name="title">
        Modifica la tua canzone
    </x-slot>
    <div class="container">
        <h1>Modifica la tua canzone!</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('updateSong', compact('song'))}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" value="{{$song->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Artista</label>
                <input type="text" class="form-control" name="singer" value="{{$song->singer}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Anno</label>
                <input type="text" class="form-control" name="year" value="{{$song->year}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Durata</label>
                <input type="text" class="form-control" name="minutes" value="{{$song->minutes}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Scegli una copertina</label>
                <input type="file" class="form-control" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>
        </form>

    </div>
</x-layout>