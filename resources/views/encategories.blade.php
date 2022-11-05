@extends('layouts.appen' , ['title' => "Our products, food additives, spices, mixtures, ingredients", 'description' => "Apogey LTD. Manufacturer of a wide range of food products.  Working since 1993, we have extensive experience and customer base in the field of B2B sales"])
@section('content')
<section class="bg-gray-7">
  <div class="breadcrumbs-custom box-transform-wrap context-dark">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Our products</h2>
      <div class="breadcrumbs-custom-decor"></div>
    </div>
    <div class="box-transform" style="background-image: url({{ asset('images/no-image.jpg') }});"></div>
  </div>
  <div class="container">
    <ul class="breadcrumbs-custom-path">
    <li><a href="{{ route('en')}}">Home</a></li>
      <li class="active">Our products range</li>
    </ul>
  </div>
</section>
<div class="container">
  <hr>
  <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our products range</span></h3>
   <div class="row row-md row-30">
    @foreach($encategories as $encategory)
    <div class="col-sm-6 col-lg-4">
      <div class="oh-desktop">
        <!-- Services Terri-->
        <article class="services-terri wow slideInUp">
          <div class="services-terri-figure"><a href="{{ route('encategory', $encategory->slug)}}"><img src="{{ $encategory->img ?? ''}}" title="{{ $encategory->title ?? ''}}" alt="{{ $encategory->title ?? ''}}" width="370" height="278"/></a>
          </div>
          <div class="services-terri-caption"><span class="{{ $encategory->icon ?? ''}}"></span>
            <h5 class="services-terri-title"><a href="{{ route('encategory', $encategory->slug)}}">{{ $encategory->title ?? ''}}</a></h5>
          </div>
        </article>
      </div>
    </div>
    @endforeach
  </div>
</div>
  @endsection

