
@extends('app')

@section('title', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_theme', '臺灣鯨豚族群調查計畫-生態調查標準資料')

@section('sdg_contents')

新增鯨豚族群調查表單

@include('message.list')
{!! Form::open(['url' => 'observations/store']) !!}
    @include('observations.form', ['submitButtonText'=>"新增調查計畫資料"])
{!! Form::close() !!}

@endsection