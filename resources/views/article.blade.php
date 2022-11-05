@extends('layouts.app', ['title' => "$articles->title", 'description' => "$articles->description"])
@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/') }}">Головна</a></li>
      <li class="breadcrumb-item"><a href="{{route('articles')}}">Статті</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ $articles->title }}</li>
    </ol>
  </nav>
<div class="container" style="min-height:700px;">
<h1 class="animate__animated animate__fadeInUp">{{ $articles->title }}</h1>
<div class="hr-yellow"></div>
<img class="img-thumbnail col-md-6 col-12 animate__animated animate__fadeInUp" src="{{ $articles->img ?? asset('img/header.jpg') }}" alt="{{ $articles->title }}" title="{{ $articles->title }}" >
<hr>
<p>{!! $articles -> intro !!}</p>
<hr>
<p>{!! $articles -> content !!}</p>
<hr>
</div>
@endsection

