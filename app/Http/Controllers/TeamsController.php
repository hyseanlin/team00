<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 從 Model 拿資料
        $teams = Team::all();
        // 把資料送給 view
        return view('teams.index')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'zone' => 'required|string|min:2|max:100',
            'city' => 'required|string|min:2|max:100',
            'home' => 'required|string|min:2|max:100'
        ], [
            "name.required" => "球隊名稱 為必填",
            "name.min" => "球隊名稱 至少需2個字元",
            "zone.required" => "分區 為必填",
            "zone.min" => "分區 至少需2個字元",
            "city.required" => "城市 為必填",
            "city.min" => "城市 至少需2個字元",
            "home.required" => "主場 為必填",
            "home.min" => "主場 至少需2個字元",
        ]);

        $name = $request->input('name');
        $city = $request->input('city');
        $home = $request->input('home');
        $zone = $request->input('zone');

        Team::create([
            'name' => $name,
            'city' => $city,
            'home' => $home,
            'zone' => $zone
        ]);

        return redirect('teams');
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
        $team = Team::findOrFail($id);
        $players = $team->players;
        // 把資料送給 view
        return view('teams.show', ['team'=>$team, 'players'=>$players]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit', ['team'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:100',
            'zone' => 'required|string|min:2|max:100',
            'city' => 'required|string|min:2|max:100',
            'home' => 'required|string|min:2|max:100'
        ], [
            "name.required" => "球隊名稱 為必填",
            "name.min" => "球隊名稱 至少需2個字元",
            "zone.required" => "分區 為必填",
            "zone.min" => "分區 至少需2個字元",
            "city.required" => "城市 為必填",
            "city.min" => "城市 至少需2個字元",
            "home.required" => "主場 為必填",
            "home.min" => "主場 至少需2個字元",
        ]);


        $team = Team::findOrFail($id);

        $team->name = $request->input('name');
        $team->city = $request->input('city');
        $team->home = $request->input('home');
        $team->zone = $request->input('zone');
        $team->save();

        return redirect('teams');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect('teams');
    }
}
