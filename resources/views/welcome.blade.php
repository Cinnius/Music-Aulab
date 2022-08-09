<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <header class="container-fluid mb-5 header-bg">
        <div class="vh-100 d-flex flex-column justify-content-center align-items-center text-white">
            <h1 class="display-3 fw-bold">MusicAulab</h1>
            <p class="display-4">Dove la tua musica prende vita!</p>
        </div>
    </header>

    <div class="container">
        <h2 class="text-danger text-center">Questa è la nostra discografia attuale:</h2>
        <div class="row">
            @foreach ($songs as $song)
                <div class="col-12 col-md-4 d-flex">
                    <div class="card mx-auto my-3">
                            @if ($song->img == Null) 
                                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            @else
                                <img src="{{Storage::url($song->img)}}" class="card-img-top" alt="...">
                            @endif
                        <div class="card-body flex-fill">
                      
                            <h4 class="card-title">Titolo: {{$song->title}}</h4>
                            <h5 class="card-title">Canzone aggiunta da: {{$song->user->name}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="card-body position-relative my-4">
                            <a href="{{route('detailSong', compact('song'))}}" class="btn btn-primary position-absolute bottom-0">Maggiori Informazioni</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>