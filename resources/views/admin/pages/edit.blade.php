@extends('admin.layouts.admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title')Список сторінок @endslot
    @slot('parent')Головна @endslot
    @slot('active')Сторінка @endslot
    @endcomponent

  <hr />

  <form enctype="multipart/form-data" encrypt="multipart/form-data" action="{{route('admin.page.update', $page)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf

    {{-- Form include --}}
    @include('admin.pages.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection

