@extends('app')

@section('title', '顯示特定球隊')

@section('nba_theme', '您所選取的球隊資料')

@section('nba_contents')
<h1>顯示單一球隊</h1>
球隊編號：{{ $team->id }}<br/>
球隊名字：{{ $team->name }}<br/>
球隊所在城市：{{ $team->city }}<br/>
球隊分區：{{ $team->zone }}<br/>
球隊主場：{{ $team->home }}<br/>

<h1>{{ $team->name }}的所有球員</h1>

<table>
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>所屬球隊</th>
        <th>生日</th>
        <th>到職日</th>
        <th>位置</th>
        <th>身高</th>
        <th>體重</th>
        <th>年資</th>
        <th>國籍</th>
    </tr>
    @foreach ($players as $player)
        <tr>
            <td>{{ $player->id }}</td>
            <td>{{ $player->name }}</td>
            <td>{{ $player->team->name }}</td>
            <td>{{ $player->onboarddate }}</td>
            <td>{{ $player->birthdate }}</td>
            <td>{{ $player->position }}</td>
            <td>{{ $player->height }}</td>
            <td>{{ $player->weight }}</td>
            <td>{{ $player->year }}</td>
            <td>{{ $player->nationality }}</td>
        </tr>
    @endforeach
</table>
@endsection