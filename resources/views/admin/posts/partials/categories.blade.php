@foreach ($categories as $category)

  <option value="{{$category->id ?? ''}}"

    @isset($post->id)
      @foreach ($post->categories as $categoryPosts)
        @if ($category->id == $categoryPosts->id)
          selected=""
        @endif
      @endforeach
    @endisset

    >
    {!! $delimiter or '' !!}{{$category->title ?? ''}}
  </option>

  @if (count($category->childrenCategories) > 0)

    @include('admin.posts.partials.categories', [
      'categories' => $category->childrenCategories,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach