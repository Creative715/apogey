@extends('layouts.app' , ['title' => "$categories->title", 'description' => "$categories->description"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $categories->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $categories->img }});"></div>
  </div>

  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ ('/')}}">Головна</a></li>
    <li><a href="{{ route('categories')}}">Наша продукція</a></li>
      <li class="active">{{ $categories->title }}</li>
    </ul>
  </div>
</section>
  <div class="container-fluid" style="min-height: 800px;">
    <div class="row">

      <div class="col-12 col-md-8 offset-md-2" style="margin-top: 20px;">
        <h2>Застосовуються</h2>
        <hr>
        {!! $categories->intro !!}
        <hr>
        </ul>
      </div>

    </div>
  </div>  

  @endsection