@extends('admin.layouts.admin')

@section('content')

<div class="container">

  @component('admin.components.breadcrumb')
    @slot('title') Створення товару @endslot
    @slot('parent') Головна @endslot
    @slot('active') Товару @endslot
  @endcomponent

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{ route('admin.rupost.store') }}" method="post">
   @csrf
    {{-- Form include --}}
    @include('admin.rupost.partials.form')

  </form>
</div>

@endsection
