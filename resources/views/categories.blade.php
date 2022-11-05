@extends('layouts.app' , ['title' => "Каталог нашої продукції, харчові добавки, спеції, суміші, інгредієнти", 'description' => "ТОВ Апогей. Виробник широкого спектру товарів харчової промисловості.  Працюючи з 1993 року, ми маємо великий досвід і клієнтську базу, в сфері B2B продажів"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Каталог нашої продукції</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ ('/')}}">Головна</a></li>
      <li class="active">Каталог нашої продукції</li>
    </ul>
  </div>
</section>
            <div class="container">
              <hr>
              <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Наша продукція</span></h3>
              <div class="row row-md row-30">
                @foreach($categories as $category)
                <div class="col-sm-6 col-lg-4">
                  <div class="oh-desktop">
                    <!-- Services Terri-->
                    <article class="services-terri wow slideInUp">
                      <div class="services-terri-figure"><a href="{{ route('category', $category->slug)}}"><img src="{{ $category->img ?? ''}}" title="{{ $category->title ?? ''}}" alt="{{ $category->title ?? ''}}" width="370" height="278"/></a>
                      </div>
                      <div class="services-terri-caption"><span class="{{ $category->icon ?? ''}}"></span>
                        <h5 class="services-terri-title"><a href="{{ route('category', $category->slug)}}">{{ $category->title ?? ''}}</a></h5>
                      </div>
                    </article>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
  @endsection

