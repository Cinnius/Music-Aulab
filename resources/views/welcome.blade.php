<x-layout>
    <div class="container">
        <h1 class="text-danger">Questa è la nostra discografia attuale:</h1>

        <div class="row">
            @foreach ($songs as $song)
                <div class="col-12 col-md-4">
                    <div class="card mx-auto my-3" style="width: 18rem;">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$song->title}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    

</x-layout>