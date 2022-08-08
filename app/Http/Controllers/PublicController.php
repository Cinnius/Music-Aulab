<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function homepage() {
        $songs = Song::all();
        return view('welcome', compact('songs'));
    }

    public function user() {
        $songs = Song::all();
        return view('utente', compact('songs'));
    }

    public function postProfile(Request $req) {
        // dd($req->all());
        $profile = Auth::user()->profile()->create(
            [
            "phone"=>$req->input('phone'),
            "address"=>$req->input('address'),
            "cap"=>$req->input('cap'),
            "age"=>$req->input('age'),
            "birthday"=>$req->input('birthday'),
            ]
        );

        return redirect(route('user'))->with('message', "Profilo aggiornato con successo");
    }
}
