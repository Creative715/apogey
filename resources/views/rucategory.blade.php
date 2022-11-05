@extends('layouts.appru' , ['title' => "$rucategory->title", 'description' => "$rucategory->description"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $rucategory->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $rucategory->img }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('ru')}}">Главная</a></li>
    <li><a href="{{ route('rucategories')}}">Наша продукция</a></li>
      <li class="active">{{ $rucategory->title }}</li>
    </ul>
  </div>
</section>
  <div class="container-fluid text-center" style="min-height: 800px;">
    <div class="row">

      <div class="col-12 col-md-8 offset-md-2" style="margin-top: 20px;">
        <h2>Применяется</h2>
        <hr>
        {!! $rucategory->intro !!}
        <hr>
        </ul>
      </div>

    </div>
  </div>

  @endsection
