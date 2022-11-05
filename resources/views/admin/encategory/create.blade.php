@extends('admin.layouts.admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Створення категорії @endslot
    @slot('parent') Головна @endslot
    @slot('active') Категорії @endslot
  @endcomponent

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{route('admin.encategory.store')}}" method="post">
    @csrf

    {{-- Form include --}}
    @include('admin.encategory.partials.form')

  </form>
</div>

@endsection
