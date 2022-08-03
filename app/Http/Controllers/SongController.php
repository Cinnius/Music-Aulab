<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function form() {
        return view('form');
    }

    public function postSong(Request $req) {
        // dd($req->all());
        $song = Song::create([
            "title"=>$req->input('title'),
            "singer"=>$req->input('singer'),
            "year"=>$req->input('year'),
            "minutes"=>$req->input('minutes'),
        ]);

        return redirect(route('form'))->with('message', "Canzone aggiunta con successo, vuoi aggiungerne un'altra?");
    }
}
