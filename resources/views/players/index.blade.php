
@extends('app')

@section('title', 'NBA 網站 - 列出所有球員')

@section('nba_theme', 'NBA 球員')

@section('nba_contents')
<h1>列出所有球員</h1>

<table>
    <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>球隊編號</th>
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
    @for($i=0; $i<count($players); $i++)
        <tr>
            <td>{{ $players[$i]['id'] }}</td>
            <td>{{ $players[$i]['name'] }}</td>
            <td>{{ $players[$i]['tid'] }}</td>
            <td>{{ $players[$i]['onboarddate'] }}</td>
            <td>{{ $players[$i]['birthdate'] }}</td>
            <td>{{ $players[$i]['position'] }}</td>
            <td>{{ $players[$i]['height'] }}</td>
            <td>{{ $players[$i]['weight'] }}</td>
            <td>{{ $players[$i]['year'] }}</td>
            <td>{{ $players[$i]['nationality'] }}</td>
            <td><a href="{{ route('players.show', ['id'=>$players[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('players.edit', ['id'=>$players[$i]['id']]) }}">修改</a></td>    
            <td>刪除</td>    
        </tr>
    @endfor
<table>
@endsection