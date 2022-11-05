@extends('layouts.app' , ['title' => "Компанія ТОВ Апогей", 'description' => "Компанія ТОВ Апогей. Лідер у виробництві великого спектру товарів харчової промисловості.  Працюючи з 1993 року, ми маємо великий досвід і клієнтську базу, в сфері B2B продажів"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Про компанію</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ ('/')}}">Головна</a></li>
      <li class="active">Про компанію</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:700px;">
    <div class="row">
        <hr>
        @foreach ($pages as $page)
        <div class="col-md-12">
          <div class="card">
          <div class="card-header">
            <h3 class="animate__animated animate__fadeInLeft"><a href="{{ route('page', ['slug'  => $page->slug]) }}">{{ $page->title }}</a></h3>
          </div>
              <div class="card-body">
                <div class="card-img animate__animated animate__fadeInRight" style="background-image: url({{ $page->img ?? asset('img/header.jpg') }});"></div>
               <p>{!! $page->intro !!}</p>
              <hr>
                <a class="button button-primary button-winona button-shadow-2" href="{{ route('page', ['slug'  => $page->slug]) }}">Докладніше >>></a>
          </div>
          <div class="my-3"><hr></div>
        </div>
      </div>
      @endforeach
  
    </div>  
</div>
@endsection

