<x-layout>
    <x-slot name="title">
        {{$song->title}}
    </x-slot>
    <div class="col-12 col-md-4">
        <div class="card mx-auto my-3" style="width: 18rem;">
                @if ($song->img == Null) 
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                @else
                    <img src="{{Storage::url($song->img)}}" class="card-img-top" alt="...">
                @endif
            <div class="card-body">
                <h5 class="card-title">{{$song->title}}</h5>
                <p class="card-text">Il cantante di questa canzone è: {{$song->singer}}, è stata scritta nel: {{$song->year}} e dura {{$song->minutes}} secondi.</p>
            </div>
        </div>
    </div>
</x-layout>