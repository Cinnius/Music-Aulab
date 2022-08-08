<x-layout>

    <div class="container">
        <h1>Utente: {{Auth::user()->name}}</h1>

        <div class="row">
            <h2>Aggiorna il tuo profilo</h2>

            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form method="POST" action="{{route('postProfile')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Telefono</label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <label class="form-label">Indirizzo</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-3">
                    <label class="form-label">Cap</label>
                    <input type="text" class="form-control" name="cap">
                </div>
                <div class="mb-3">
                    <label class="form-label">Età</label>
                    <input type="text" class="form-control" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label">Data di nascita</label>
                    <input type="date" class="form-control" name="birthday">
                </div>
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </form>

        </div>

        <div class="row">
          

            @foreach ($songs as $song)
                @if (Auth::user() == $song->user)

                <div class="col-12 col-md-4">
                    <div class="card mx-auto my-3" style="width: 18rem;">
                            @if ($song->img == Null) 
                                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                            @else
                                <img src="{{Storage::url($song->img)}}" class="card-img-top" alt="...">
                            @endif
                        <div class="card-body">
                    
                            <h4 class="card-title">Titolo: {{$song->title}}</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="{{route('detailSong', compact('song'))}}" class="btn btn-primary">Maggiori Informazioni</a>
                        </div>
                    </div>
                </div>
                    
                @endif
            @endforeach
        </div>

    </div>



</x-layout>