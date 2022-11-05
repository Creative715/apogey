<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок товару" value="{{ old('title') ?? $enpost->title ?? ''}}" required>
<label for="">Батьківська категорія</label>
<select class="form-control" name="categories[]">
  @include('admin.enpost.partials.categories', ['encategories' => $encategories])
</select>
<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Генерується автоматично" value="{{ $enpost->slug ?? ''}}" readonly="">

<div class="form-group">
<label for="">Короткий опис</label>
<textarea class="form-control" id="intro" name="intro" cols="30" rows="4">{{ old('intro') ?? $enpost->intro ?? ''}}</textarea>
</div>
<div class="form-group">
  <input type="file" name="img" value="{{ old('img') ?? $enpost->img ?? ''}}">
</div>
<div class="form-group">
<label for="">Текст товару</label>
<textarea class="form-control" id="content" name="content" cols="30" rows="20">{{ old('content') ?? $enpost->content ?? ''}}</textarea>
</div>

<div class="form-group">
<label for="">Опис</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="2">{{ old('description') ?? $enpost->description ?? ''}}</textarea>
</div>

<hr />

<input class="btn btn-primary" type="submit" value="Зберегти">


