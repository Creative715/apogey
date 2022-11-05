@foreach ($rucategories as $rucategory_list)

  <option value="{{$rucategory_list->id ?? ''}}"

    @isset($rucategory->id)

      @if ($rucategory->rucategory_id == $rucategory_list->id)
        selected=""
      @endif

      @if ($rucategory->id == $rucategory_list->id)
        hidden=""
      @endif

    @endisset

    >
    {!! $delimiter ?? '' !!}{{$rucategory_list->title ?? ''}}
  </option>

  @if (count($rucategory_list->childrenRucategories) > 0)

    @include('admin.rucategories.partials.categories', [
      'rucategories' => $rucategory_list->childrenRucategories,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
