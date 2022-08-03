<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function form() {
        return view('form');
    }

    public function postSong(Request $req) {
        dd($req->all());
    }
}
