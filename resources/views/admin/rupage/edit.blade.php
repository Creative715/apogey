@extends('admin.layouts.admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
    @slot('title')Список сторінок @endslot
    @slot('parent')Головна @endslot
    @slot('active')Сторінка @endslot
    @endcomponent

  <hr />

  <form enctype="multipart/form-data" action="{{route('admin.rupage.update', $rupage)}}" method="post">
    <input type="hidden" name="_method" value="put">
    @csrf

    {{-- Form include --}}
    @include('admin.rupage.partials.form')

    <input type="hidden" name="modified_by" value="{{Auth::id()}}">
  </form>
</div>

@endsection

