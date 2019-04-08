<link rel="stylesheet" type="text/css" href="/css/bella.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bella.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bella.css') }}">
<link rel="stylesheet" type="text/css" href="/css/bella.css">

<div class="a">
@extends('layout.layout')

@section('title',$title)

@section('sidebar')
@parent
<li class="nav-item">
	<a class="nav-link" href="#">PHP</a>
</li>

@endsection

@section('content')

<p>{{ $konten }}</p>
@stop
</div>