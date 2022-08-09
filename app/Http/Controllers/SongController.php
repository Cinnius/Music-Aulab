<?php

namespace App\Http\Controllers;

use App\Http\Requests\SongRequest;
use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;
use App\Models\Compilation;

class SongController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('detailSong');
    }
    
    public function form() {
        $compilations = Compilation::all();
        return view('form', compact('compilations'));
    }

    public function postSong(SongRequest $req) {
        // dd($req->all());

        $song = Auth::user()->songs()->create(
            [
            "title"=>$req->input('title'),
            "singer"=>$req->input('singer'),
            "year"=>$req->input('year'),
            "minutes"=>$req->input('minutes'),
            ]
        );

        if($req->file('img')){
            $song->img = $req->file('img')->store('public/img');
            $song->save();
        }

        foreach($req->compilations as $compilation){
            if($compilation){
                $song->compilations()->attach($compilation);
            }
        }


        return redirect(route('form'))->with('message', "Canzone aggiunta con successo, vuoi aggiungerne un'altra?");
    }

    public function detailSong(Song $song) {
        return view('songdetails', compact('song'));
    }

    public function editSong(Song $song) {
        return view('songupdates', compact('song'));
    }

    public function updateSong(Song $song, Request $request) {
        $song->title = $request->title;
        $song->singer = $request->singer;
        $song->year = $request->year;
        $song->minutes = $request->minutes;
        if($request->file('img')){
            $song->img = $request->file('img')->store('public/img');
        }
        $song->save();
        return redirect(route('homepage'));
    }

    public function destroySong(Song $song) {
        $song->compilations()->detach();
        $song->user()->disassociate();

        $song->delete();

        return redirect(route('homepage'));
    }
}
