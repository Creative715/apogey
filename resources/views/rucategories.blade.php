@extends('layouts.appru' , ['title' => "Наша продукция, пищевые добавки, специи, смеси, ингредиенты", 'description' => "OOO Апогей - производитель широкого спектра товаров пищевой промышленности. Работая с 1993 года, мы имеем большой опыт и клиентскую базу, в сфере B2B продаж. "])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Наша продукция</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('ru')}}">Главная</a></li>
      <li class="active">Наша продукция</li>
    </ul>
  </div>
</section>
    
<div class="container">
  <hr>
  <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Наша продукция</span></h3>
  <div class="row row-md row-30">
    @foreach($rucategories as $rucategory)
    <div class="col-sm-6 col-lg-4">
      <div class="oh-desktop">
        <!-- Services Terri-->
        <article class="services-terri wow slideInUp">
          <div class="services-terri-figure"><a href="{{ route('rucategory', $rucategory->slug)}}"><img src="{{ $rucategory->img ?? ''}}" title="{{ $rucategory->title ?? ''}}" alt="{{ $rucategory->title ?? ''}}" width="370" height="278"/></a>
          </div>
          <div class="services-terri-caption"><span class="{{ $rucategory->icon ?? ''}}"></span>
            <h5 class="services-terri-title"><a href="{{ route('rucategory', $rucategory->slug)}}">{{ $rucategory->title ?? ''}}</a></h5>
          </div>
        </article>
      </div>
    </div>
    @endforeach
  </div>
</div> 
  @endsection

