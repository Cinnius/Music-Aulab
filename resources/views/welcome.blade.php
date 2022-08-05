<x-layout>
    <x-slot name="title">
        Homepage
    </x-slot>
    <div class="container">
        <h1 class="text-danger">Questa è la nostra discografia attuale:</h1>

        <div class="row">
            @foreach ($songs as $song)
                <div class="col-12 col-md-4">
                    <div class="card mx-auto my-3" style="width: 18rem;">
                            @if ($song->img == Null) 
                                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            @else
                                <img src="{{Storage::url($song->img)}}" class="card-img-top" alt="...">
                            @endif
                        <div class="card-body">
                      
                            <h4 class="card-title">Titolo: {{$song->title}}</h4>
                            <h5 class="card-title">Canzone aggiunta da: {{$song->username}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('detailSong', compact('song'))}}" class="btn btn-primary">Maggiori Informazioni</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>