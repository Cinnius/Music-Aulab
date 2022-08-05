<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

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
}
