<x-layout>
    <x-slot name="title">
        {{$song->title}}
    </x-slot>
    <div class="col-12 col-md-4 my-5 pt-5">
        <div class="card mx-auto my-3" style="width: 18rem;">
                @if ($song->img == Null) 
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                @else
                    <img src="{{Storage::url($song->img)}}" class="card-img-top" alt="...">
                @endif
            <div class="card-body">
                <h5 class="card-title">{{$song->title}}</h5>
                <p class="card-text">Il cantante di questa canzone è: {{$song->singer}}, è stata scritta nel: {{$song->year}} e dura {{$song->minutes}} secondi.</p>
                
                @if(count($song->compilations)>=1)
                    <ul class="card-text mb-3">Canzone contenuta in:
                        @foreach($song->compilations as $compilation)
                            <li>{{$compilation->title}}</li>
                        @endforeach
                    </ul>
                @endif

                @guest
                @else

                    @if (Auth::id() == $song->user_id)
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-warning mx-2" href="{{route('editSong', compact('song')) }}">Modifica</a>
                            <form method="POST" action="{{route('destroySong', compact('song')) }}">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </div>
                    @endif
        
                    
                @endguest
            </div>
        </div>
    </div>
</x-layout>