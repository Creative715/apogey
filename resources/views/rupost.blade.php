@extends('layouts.appru' , ['title' => "$ruposts->title", 'description' => "$ruposts->description"])

@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $ruposts->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $ruposts->img ?? asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('ru')}}">Главная</a></li>
    <li><a href="{{ route('rucategories')}}">Наша продукция</a></li>
      <li class="active">{{ $ruposts->title }}</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:900px;">
<div class="row">
  <div class="col-md-12">
<hr>
<h3>{!! $ruposts -> intro !!}</h3>
<hr>
<p>{!! $ruposts -> content !!}</p>
<hr>
  </div>
</div>
</div>
@endsection

