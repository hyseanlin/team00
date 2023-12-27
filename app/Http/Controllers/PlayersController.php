<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use App\Http\Requests\CreatePlayerRequest;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 從 Model 拿資料
        $players = Player::all();
        $positions = Player::allPositions()->pluck('players.position', 'players.position');
        // 把資料送給 view
        return view('players.index', ['players' => $players, 'positions'=>$positions]);
    }

    public function senior()
    {
        // 從 Model 拿特定條件下的資料
        $players = Player::senior()->get();
        $positions = Player::allPositions()->pluck('players.position', 'players.position');
        // 把資料送給 view
        return view('players.index', ['players' => $players, 'positions'=>$positions]);
    }

    public function position(Request $request)
    {
        $players = Player::position($request->input('pos'))->get();
        $positions = Player::allPositions()->pluck('players.position', 'players.position');
        return view('players.index', ['players' => $players, 'positions'=>$positions]);
    }    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Team::orderBy('teams.id', 'asc')->pluck('teams.name', 'teams.id');
        return view('players.create', ['teams' =>$teams, 'teamSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePlayerRequest $request)
    {
        $name = $request->input('name');
        $tid = $request->input('tid');
        $position = $request->input('position');
        $height = $request->input('height');
        $weight = $request->input('weight');
        $year = $request->input('year');
        $nationality = $request->input('nationality');

        $player = Player::create([
            'name'=>$name,
            'tid'=>$tid,
            'position'=>$position,
            'height'=>$height,
            'weight'=>$weight,
            'year'=>$year,
            'nationality'=>$nationality]);
        return redirect('players');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 從 Model 拿資料
        $player = Player::findOrFail($id);
        // 把資料送給 view
        return view('players.show')->with('player', $player);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $player = Player::findOrFail($id);
        $teams = Team::orderBy('teams.id', 'asc')->pluck('teams.name', 'teams.id');
        $selected_tags = $player->team->id;
        return view('players.edit', ['player' =>$player, 'teams' => $teams, 'teamSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePlayerRequest $request, $id)
    {
        $player = Player::findOrFail($id);

        $player->name = $request->input('name');
        $player->tid = $request->input('tid');
        $player->position = $request->input('position');
        $player->height = $request->input('height');
        $player->weight = $request->input('weight');
        $player->year = $request->input('year');
        $player->nationality = $request->input('nationality');
        $player->save();

        return redirect('players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();
        return redirect('players');
    }
}
