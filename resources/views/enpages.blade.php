@extends('layouts.appen' , ['title' => "Apogey LTD Company", 'description' => "Apogey LTD Company. Leader in the production of a wide range of food products.  Working since 1993, we have extensive experience and customer base in the field of B2B sales"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">About Company</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('en')}}">Home</a></li>
      <li class="active">About Company</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:700px;">
    <div class="row">
        <hr>
        @foreach ($enpages as $enpage)
        <div class="col-md-12">
          <div class="card">
          <div class="card-header">
            <h3 class="animate__animated animate__fadeInLeft"><a href="{{ route('enpage', ['slug'  => $enpage->slug]) }}">{{ $enpage->title }}</a></h3>
          </div>
              <div class="card-body">
                <div class="card-img animate__animated animate__fadeInRight" style="background-image: url({{ $enpage->img ?? asset('img/header.jpg') }});"></div>
               <p>{!! $enpage->intro !!}</p>
              <hr>
                <a class="button button-primary button-winona button-shadow-2" href="{{ route('enpage', ['slug'  => $enpage->slug]) }}">More >>></a>
          </div>
          <div class="my-3"><hr></div>
        </div>
      </div>
      @endforeach
  
    </div>  
</div>
@endsection

