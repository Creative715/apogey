@extends('layouts.app' , ['title' => "$posts->title", 'description' => "$posts->description"])

@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $posts->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $posts->img ?? asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ ('/')}}">Головна</a></li>
    <li><a href="{{ route('categories')}}">Наша продукція</a></li>
      <li class="active">{{ $posts->title }}</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:900px;">
<div class="row">
  <div class="col-md-12">
<hr>
<h3>{!! $posts -> intro !!}</h3>
<hr>
{!! $posts -> content !!}
<hr>
  </div>
</div>
</div>
@endsection

