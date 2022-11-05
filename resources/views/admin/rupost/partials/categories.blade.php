@foreach ($rucategories as $rucategory)

  <option value="{{$rucategory->id ?? ''}}"

    @isset($rupost->id)
      @foreach ($rupost->rucategories as $rucategoryRupost)
        @if ($rucategory->id == $rucategoryRuposts->id)
          selected=""
        @endif
      @endforeach
    @endisset

    >
    {!! $delimiter or '' !!}{{$rucategory->title ?? ''}}
  </option>

  @if (count($rucategory->childrenCategories) > 0)

    @include('admin.rupost.partials.categories', [
      'rucategories' => $rucategory->childrenRucategories,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
