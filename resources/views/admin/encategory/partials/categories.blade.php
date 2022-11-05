@foreach ($encategories as $encategory_list)

  <option value="{{$encategory_list->id ?? ''}}"

    @isset($encategory->id)

      @if ($encategory->encategory_id == $encategory_list->id)
        selected=""
      @endif

      @if ($encategory->id == $encategory_list->id)
        hidden=""
      @endif

    @endisset

    >
    {!! $delimiter ?? '' !!}{{$encategory_list->title ?? ''}}
  </option>

  @if (count($encategory_list->childrenencategories) > 0)

    @include('admin.encategories.partials.categories', [
      'encategories' => $encategory_list->childrenencategories,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
