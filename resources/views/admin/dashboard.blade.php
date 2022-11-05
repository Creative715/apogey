@extends('admin.layouts.admin')
@section('content')
<div class="container">
    <h1>Адмін панель</h1>
    <hr>
    <div class="row">
        <div class="col-4">
            <div class="alert alert-primary" role="alert">
                <a href="{{route('admin.post.index')}}"><h2>Товари (UA) <span class="badge badge-light">{{ $posts }}</span></h2></a>
                <hr>
                <a href="{{route('admin.enpost.index')}}"><h2>Товари (EN) <span class="badge badge-light">{{ $enposts }}</span></h2></a>
                <hr>
                <a href="{{route('admin.rupost.index')}}"><h2>Товари (ru) <span class="badge badge-light">{{ $ruposts }}</span></h2></a>
              </div>
        </div>
        <div class="col-4">
            <div class="alert alert-primary" role="alert">
                <a href="{{route('admin.page.index')}}"><h2>Сторінки (UA) <span class="badge badge-light">{{ $pages }}</span></h2></a>
                <hr>
                <a href="{{route('admin.enpage.index')}}"><h2>Сторінки (EN) <span class="badge badge-light">{{ $enpages }}</span></h2></a>
                <hr>
                <a href="{{route('admin.rupage.index')}}"><h2>Сторінки (ru) <span class="badge badge-light">{{ $rupages }}</span></h2></a>
              </div>
        </div>
        <div class="col-4">
            <div class="alert alert-primary" role="alert">
                <a href="{{route('admin.category.index')}}"><h2>Категорії (UA) <span class="badge badge-light">{{ $categories }}</span></h2></a>
                <hr>
                <a href="{{route('admin.encategory.index')}}"><h2>Категорії (EN) <span class="badge badge-light">{{ $encategories }}</span></h2></a>
                <hr>
                <a href="{{route('admin.rucategory.index')}}"><h2>Категорії (ru) <span class="badge badge-light">{{ $rucategories }}</span></h2></a>
              </div>
        </div>
    </div>
</div>
@endsection
