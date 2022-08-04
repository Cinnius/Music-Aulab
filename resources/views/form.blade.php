<x-layout>
    <div class="container">
        <h1>Inserisci la tua canzone!</h1>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('postSong')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" value="{{old("title")}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Artista</label>
                <input type="text" class="form-control" name="singer" value="{{old("singer")}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Anno</label>
                <input type="text" class="form-control" name="year" value="{{old("year")}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Durata</label>
                <input type="text" class="form-control" name="minutes" value="{{old("minutes")}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Scegli una copertina</label>
                <input type="file" class="form-control" name="img">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>

    </div>
</x-layout>