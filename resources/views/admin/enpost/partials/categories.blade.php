@foreach ($encategories as $encategory)

  <option value="{{$encategory->id ?? ''}}"

    @isset($rupost->id)
      @foreach ($rupost->encategories as $encategoryEnpost)
        @if ($encategory->id == $encategoryEnposts->id)
          selected=""
        @endif
      @endforeach
    @endisset

    >
    {!! $delimiter or '' !!}{{$encategory->title ?? ''}}
  </option>

  @if (count($encategory->childrenCategories) > 0)

    @include('admin.rupost.partials.categories', [
      'encategories' => $encategory->childrenencategories,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach
