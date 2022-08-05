<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function form() {
        return view('form');
    }

    public function postSong(SongRequest $req) {
        // dd($req->all());
        $song = Song::create([
            "title"=>$req->input('title'),
            "singer"=>$req->input('singer'),
            "year"=>$req->input('year'),
            "minutes"=>$req->input('minutes'),
            "img"=>$req->file('img')->store('public/img'),
        ]);

        return redirect(route('form'))->with('message', "Canzone aggiunta con successo, vuoi aggiungerne un'altra?");
    }

    public function detailSong(Song $song) {
        return view('songdetails', compact('song'));
    }
}
