<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use App\Http\Requests\CreatePlayerRequest;

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
        // 把資料送給 view
        return view('players.index')->with('players', $players);
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
        $request->validate(
            [
                'name' => 'required|string|min:2|max:191',
                'tid' => 'required',
                'birthdate' => 'nullable',
                'onboarddate' => 'nullable',
                'position' => 'required|string|min:2|max:191',
                'height' => 'required|numeric|min:160|max:250',
                'weight' => 'required|numeric|min:70|max:180|lt:height', // lt = less than, lg = larger than
                'year' => 'required|numeric|min:0|max:20',
                'nationality' => 'required|string|min:2|max:191'                
            ], // 驗證規則
            [
                "name.required" => "球員名稱 為必填",
                "name.min" => "球員名稱 至少需2個字元",
                "tid.required" => "球隊編號 為必填",
                "position.required" => "球員位置 為必填",
                "height.required" => "球員身高 為必填",
                "height.numeric" => "球員身高 必須為數字",
                "height.min" => "球員身高 範圍必須介於160~250之間",
                "height.max" => "球員身高 範圍必須介於160~250之間",
                "weight.required" => "球員體重 為必填",
                "weight.numeric" => "球員體重 必須為數字",
                "weight.min" => "球員體重 範圍必須介於70~200之間",
                "weight.max" => "球員身高 範圍必須介於160~250之間",
                "year.required" => "球員年資 為必填",
                "year.min" => "球員年資 範圍必須介於0~20之間",
                "year.max" => "球員年資 範圍必須介於0~20之間",
                "nationality.required" => "球員國籍 為必填",
                "weight.lt" => "身高 必須大於 體重",
            ], // 錯誤訊息
        );

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

        $request->validate(
            [
                'name' => 'required|string|min:2|max:191',
                'tid' => 'required',
                'birthdate' => 'nullable',
                'onboarddate' => 'nullable',
                'position' => 'required|string|min:2|max:191',
                'height' => 'required|numeric|min:160|max:250',
                'weight' => 'required|numeric|min:70|max:180|lt:height', // lt = less than, lg = larger than
                'year' => 'required|numeric|min:0|max:20',
                'nationality' => 'required|string|min:2|max:191'                
            ], // 驗證規則
            [
                "name.required" => "球員名稱 為必填",
                "name.min" => "球員名稱 至少需2個字元",
                "tid.required" => "球隊編號 為必填",
                "position.required" => "球員位置 為必填",
                "height.required" => "球員身高 為必填",
                "height.numeric" => "球員身高 必須為數字",
                "height.min" => "球員身高 範圍必須介於160~250之間",
                "height.max" => "球員身高 範圍必須介於160~250之間",
                "weight.required" => "球員體重 為必填",
                "weight.numeric" => "球員體重 必須為數字",
                "weight.min" => "球員體重 範圍必須介於70~200之間",
                "weight.max" => "球員身高 範圍必須介於160~250之間",
                "year.required" => "球員年資 為必填",
                "year.min" => "球員年資 範圍必須介於0~20之間",
                "year.max" => "球員年資 範圍必須介於0~20之間",
                "nationality.required" => "球員國籍 為必填",
                "weight.lt" => "身高 必須大於 體重",
            ], // 錯誤訊息
        );        

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
