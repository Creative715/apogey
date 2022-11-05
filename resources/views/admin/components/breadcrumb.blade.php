<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<h2>{{$title}}</h2>
<hr>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('admin.index', app()->getLocale())}}">{{$parent}}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{$active}}</li>
      <li class="breadcrumb-item">  {{$title}}</li>
    </ol>
  </nav>