<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private function games()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'genre' => 'Action-Adventure',
                'platform' => 'Nintendo Switch'
            ],
            2 => [
                'id' => 2,
                'name' => 'Elden Ring',
                'genre' => 'Action RPG',
                'platform' => 'PC / PS5 / Xbox'
            ],
            3 => [
                'id' => 3,
                'name' => 'Stardew Valley',
                'genre' => 'Simulation',
                'platform' => 'PC / Switch / Mobile'
            ]
        ];
    }

    public function index()
    {
        return view('games.index', ['games' => $this->games()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $games = $this->games();

        if (!isset($games[$id])) {
            abort(404);
        }
        return view('games.show', ['game' => $games[$id]]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function featured()
    {
        $games = $this->games();
        return view('games.show', ['game' => $games[1]]);
    }

    public function favorite()
    {
        $games = $this->games();
        return view('games.show', ['game' => $games[2]]); // pick whichever game you want as "favorite"
    }
}
