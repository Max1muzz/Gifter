@extends('layouts.carcass')
@section('title','Топ 10')
@section('content')
        <h1>TOP 10</h1>
    @foreach($interviews as $interview)
        {{$interview->result}}
    @endforeach
@endsection
