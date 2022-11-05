@extends('layouts.appen' , ['title' => "$enposts->title", 'description' => "$enposts->description"])

@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">{{ $enposts->title }}</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ $enposts->img ?? asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('en')}}">Home</a></li>
    <li><a href="{{ route('encategories')}}">Our products range</a></li>
      <li class="active">{{ $enposts->title }}</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:900px;">
<div class="row">
  <div class="col-md-12">
<hr>
<h3>{!! $enposts -> intro !!}</h3>
<hr>
<p>{!! $enposts -> content !!}</p>
<hr>
  </div>
</div>
</div>
@endsection

