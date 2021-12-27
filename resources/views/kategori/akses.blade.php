{{-- @dd($title) --}}

@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    <h1>{{ $title }}</h1>
@stop

@section('footer')
    <h5>Anda berada di Halaman <b>{{ $title }}<b></h5>
@stop

{{-- @section('right-sidebar')
    <h1>Rendi</h1>
@stop --}}

@section('content')
    <p>Welcome to this beautiful {{ $title }} panel.</p>
@stop