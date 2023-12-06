
@extends('app')

@section('title', 'NBA 網站 - 列出所有球隊')

@section('nba_theme', 'NBA 球隊')

@section('nba_contents')
<h1>列出所有球隊</h1>

<table>
    <tr>
        <th>編號</th>
        <th>名稱</th>
        <th>分區</th>
        <th>城市</th>
        <th>主場</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>
    @foreach($teams as $team)
        <tr>
            <td>{{ $team->id }}</td>
            <td>{{ $team->name }}</td>
            <td>{{ $team->zone }}</td>
            <td>{{ $team->city }}</td>
            <td>{{ $team->home }}</td>
            <td><a href="{{ route('teams.show', ['id'=>$team->id]) }}">顯示</a></td>
            <td><a href="{{ route('teams.edit', ['id'=>$team->id]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endforeach
<table>

@endsection