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
@endsection