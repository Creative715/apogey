@extends('admin.layouts.admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Створення сторінки @endslot
    @slot('parent') Головна @endslot
    @slot('active') Стоірнка @endslot
  @endcomponent

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{ route('admin.page.store') }}" method="post">
   @csrf
    {{-- Form include --}}
    @include('admin.pages.partials.form')

  </form>
</div>

@endsection
