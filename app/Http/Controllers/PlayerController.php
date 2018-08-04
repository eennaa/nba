<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function show($id)
    {
        $player = \App\Player::with('team')->findOrFail($id);
        return view('players.show', compact('player'));
    }
}
