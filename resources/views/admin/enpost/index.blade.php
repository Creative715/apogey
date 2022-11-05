@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    @component('admin.components.breadcrumb')
    @slot('title')Список товарів @endslot
    @slot('parent')Головна @endslot
    @slot('active')Товар @endslot
    @endcomponent
    <hr>
<a href="{{route('admin.enpost.create')}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Створити товар</a>
<table class="table table-striped">
    <thead>
        <th>Назва</th>
        <th class="text-right">Дія</th>

    </thead>
    <tbody>
        @forelse ($enposts as $enpost)
        <tr>
    <td width='50%'>{{$enpost->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.enpost.destroy', $enpost)}}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.enpost.edit', $enpost)}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Редагувати товар</a>
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-o"></i> Видалити товар</button>
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
                    {{ $enposts->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
