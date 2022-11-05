@extends('layouts.app' , ['title' => "$pages->title", 'description' => "$pages->description"])

@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $pages->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $pages->img ?? asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ ('/')}}">Головна</a></li>
    <li><a href="{{ ('/kompaniia')}}">Про компанію</a></li>
      <li class="active">{{ $pages->title }}</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:900px;">
<div class="row">
  <div class="col-md-12">
<hr>
<h3>{!! $pages -> intro !!}</h3>
<hr>
<p>{!! $pages -> content !!}</p>
<hr>
  </div>
</div>
</div>
@endsection

