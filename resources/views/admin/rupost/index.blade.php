@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    @component('admin.components.breadcrumb')
    @slot('title')Список товарів @endslot
    @slot('parent')Головна @endslot
    @slot('active')Товар @endslot
    @endcomponent
    <hr>
<a href="{{route('admin.rupost.create')}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Створити товар</a>
<table class="table table-striped">
    <thead>
        <th>Назва</th>
        <th class="text-right">Дія</th>

    </thead>
    <tbody>
        @forelse ($ruposts as $rupost)
        <tr>
    <td width='50%'>{{$rupost->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.rupost.destroy', $rupost)}}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.rupost.edit', $rupost)}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Редагувати товар</a>
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
                    {{ $ruposts->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
