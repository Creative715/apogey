@extends('layouts.appru' , ['title' => "$rupages->title", 'description' => "$rupages->description"])

@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $rupages->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $rupages->img ?? asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('ru')}}">Главная</a></li>
    <li><a href="{{ route('rupages')}}">О компании</a></li>
      <li class="active">{{ $rupages->title }}</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:900px;">
<div class="row">
  <div class="col-md-12">
<hr>
<h3>{!! $rupages -> intro !!}</h3>
<hr>
<p>{!! $rupages -> content !!}</p>
<hr>
  </div>
</div>
</div>
@endsection

