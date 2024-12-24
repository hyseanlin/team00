
@extends('app')

@section('title', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_theme', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_contents')

編輯特定一筆鯨豚族群調查表單

{!! Form::model($observation, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\ObservationsController@update', $observation->id]]) !!}
    @include('observations.form', ['submitButtonText'=>"修改調查計畫資料"])
{!! Form::close() !!}


@endsection