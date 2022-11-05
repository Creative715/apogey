@extends('layouts.appen' , ['title' => "$encategory->title", 'description' => "$encategory->description"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $encategory->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $encategory->img }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('en')}}">Home</a></li>
    <li><a href="{{ route('encategories')}}">Our products range</a></li>
      <li class="active">{{ $encategory->title }}</li>
    </ul>
  </div>
</section>
  <div class="container-fluid text-center" style="min-height: 800px;">
    <div class="row">

      <div class="col-12 col-md-8 offset-md-2" style="margin-top: 20px;">
        <h2>Are applied</h2>
        <hr>
        {!! $encategory->intro !!}
        <hr>
        </ul>
      </div>

    </div>
  </div>

  @endsection
