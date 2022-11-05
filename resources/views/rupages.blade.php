@extends('layouts.appru' , ['title' => "Компания ООО Апогей", 'description' => "Компания ООО Апогей. Лидер в производстве большого спектра товаров пищевой промышленности.  Работая с 1993 года, мы имеем большой опыт и клиентскую базу, в сфере B2B продаж"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">О компании</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('ru')}}">Главная</a></li>
      <li class="active">О компании</li>
    </ul>
  </div>
</section>
<div class="container" style="min-height:700px;">
    <div class="row">
        <hr>
        @foreach ($rupages as $rupage)
        <div class="col-md-12">
          <div class="card">
          <div class="card-header">
            <h3 class="animate__animated animate__fadeInLeft"><a href="{{ route('rupage', ['slug'  => $rupage->slug]) }}">{{ $rupage->title }}</a></h3>
          </div>
              <div class="card-body">
                <div class="card-img animate__animated animate__fadeInRight" style="background-image: url({{ $rupage->img ?? asset('img/header.jpg') }});"></div>
               <p>{!! $rupage->intro !!}</p>
              <hr>
                <a class="button button-primary button-winona button-shadow-2" href="{{ route('rupage', ['slug'  => $rupage->slug]) }}">Подробнее >>></a>
          </div>
          <div class="my-3"><hr></div>
        </div>
      </div>
      @endforeach
  
    </div>  
</div>
@endsection

