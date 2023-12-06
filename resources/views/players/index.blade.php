
@extends('app')

@section('title', 'NBA 網站 - 列出所有球員')

@section('nba_theme', 'NBA 球員')

@section('nba_contents')
<h1>列出所有球員</h1>

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
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
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
            <td><a href="{{ route('players.show', ['id'=>$player->id]) }}">顯示</a></td>
            <td><a href="{{ route('players.edit', ['id'=>$player->id]) }}">修改</a></td>    
            <td>
                <form action="{{ url('/players/delete', ['id' => $player->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
<table>
@endsection