@extends('admin.layouts.admin')

@section('content')
  <div class="container">
    @component('admin.components.breadcrumb')
    @slot('title')Список сторінок @endslot
    @slot('parent')Головна @endslot
    @slot('active')Сторінка @endslot
    @endcomponent
    <hr>
<a href="{{route('admin.rupage.create')}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Створити сторінку</a>
<table class="table table-striped">
    <thead>
        <th>Назва</th>
        <th class="text-right">Дія</th>

    </thead>
    <tbody>
        @forelse ($rupages as $rupage)
        <tr>
    <td width='50%'>{{$rupage->title}}</td>

        <td class="text-right">
             <form onsubmit="if(confirm('Видалити?')){ return true }else{ return false }" action="{{route('admin.rupage.destroy', $rupage)}}" method="post">

            <input type="hidden" name="_method" value="DELETE">
            @csrf
            <a href="{{route('admin.rupage.edit', $rupage)}}" class="btn btn-primary"><i class="fas fa-plus-square-o"></i> Редагувати сторінку</a>
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-o"></i> Видалити сторінку</button>
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
                    {{ $rupages->links() }}
                </ul>
            </td>
        </tr>
    </tfoot>
</table>

</div>
@endsection
