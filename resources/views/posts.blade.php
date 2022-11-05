@extends('layouts.app')

@section('content')

<div class="container" style="min-height:700px;">
    <div class="row">
       @foreach ($posts as $post)
        <div class="col-md-6">
          <div class="card">
          <div class="card-header">
            <h2 class="animate__animated animate__fadeInLeft"><a href="{{ route('post', ['slug'  => $post->slug]) }}">{{ $post->meta_title }}</a></h2>
          </div>
              <div class="card-body">
                <div class="card-img animate__animated animate__fadeInRight" style="background-image: url({{ $post->img ?? asset('img/header.jpg') }});"></div>
               <p>{!! $post->intro !!}</p>
                <hr>
              {{ $post->created_at }}
              <hr>
                <a class="btn btn-outline-dark" href="{{ route('post', ['slug'  => $post->slug]) }}">Докладніше >>></a>
          </div>
          <div class="my-3"><hr></div>
        </div>
      </div>
      @endforeach
      <div class="container-fluid py-4">
          {{ $posts->links() }}     
      </div>
  
    </div>  
</div>
@endsection

