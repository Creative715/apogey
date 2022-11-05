@extends('layouts.app' , ['title' => "Статті - Найсвіжіша і корисна інформація для поліпшення комфорту у вашому будинку."])
@section('content')
  <div class="container-fluid">

    @if (isset($_GET['search']))
        @if(count($articles)>0)
        <h3>За запитом <span class="text-danger">"<?=$_GET['search']?>"</span> знайдено {{count($articles)}} cтатей </h3>
        @else 
        <h3>За запитом <span class="text-danger">"<?=$_GET['search']?>"</span> нічого не знайдено! </h3>
        <h4><a href="{{ route('articles')}}">Повернутися до статтей</a></h4>
        @endif
    @endif

    <div class="row">
      @foreach ($articles as $article)
      <div class="col-md-6 col-12">
        <div class="card">
        <div class="card-header">
          <h2 class="animate__animated animate__fadeInUp"><a href="{{ route('articleArt', $article->slug)}}">{{ $article->title }}</a></h2>
        </div>
            <div class="card-body">
              <div class="card-img" style="background-image: url({{ $article->img ?? asset('img/header.jpg') }});"></div>
              {!! $article->intro !!}
              <hr>
            {{ $article->created_at }}
            <hr>
              <a class="btn btn-outline-dark" href="{{ route('articleArt', $article->slug)}}">Докладніше</a>
        </div>
        <div class="my-3"><hr></div>
      </div>
    </div>
    @endforeach
    {{ $articles->links() }}
  </div>  
  </div>
  @endsection



