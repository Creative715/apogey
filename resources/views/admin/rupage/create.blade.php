@extends('admin.layouts.admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Створення сторінки @endslot
    @slot('parent') Головна @endslot
    @slot('active') Стоірнка @endslot
  @endcomponent

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{ route('admin.rupage.store') }}" method="post">
   @csrf
    {{-- Form include --}}
    @include('admin.rupages.rupartials.form')

  </form>
</div>

@endsection
