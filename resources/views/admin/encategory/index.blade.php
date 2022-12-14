@extends('admin.layouts.admin')

@section('content')

  <div class="container">

    <nav aria-label="breadcrumb">
        @component('admin.components.breadcrumb')
        <ol class="breadcrumb">

          <li class="breadcrumb-item"><a href="#"> @slot('title')Список категорій @endslot</a></li>
          <li class="breadcrumb-item"><a href="#"> @slot('parent')Головна @endslot</a></li>
          <li class="breadcrumb-item active" aria-current="page">@slot('active')Категорії @endslot</li>
        </ol>
      </nav>




    @endcomponent
    <hr>
<a href="{{route('admin.encategory.create')}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Створити категорію</a>
<table class="table table-striped">
    <thead>
        <th>Назва</th>
        <th class="text-right">Дія</th>
    </thead>
    <tbody>
        @forelse ($encategories as $encategory)
        <tr>
    <td>{{$encategory->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.encategory.destroy', $encategory)}}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.encategory.edit', $encategory)}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Редагувати категорію</a>
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-o"></i> Видалити категорію</button>
        </form>
        </td>
    </tr>
        @empty

        @endforelse
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination pull-right">
                    {{ $encategories->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
