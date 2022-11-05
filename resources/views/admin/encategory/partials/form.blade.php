<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категорії" value="{{$encategory->title ?? ""}}" required>
<div class="form-group">
<label for="">Опис категорії</label>
</div>
<div class="form-group">
<input type="text" class="form-control" name="description" placeholder="Опис для категорії" value="{{$encategory->description ?? ""}}" required>
</div>
<div class="form-group">
  <input type="file" name="img">
</div>
<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Генерується автоматично" value="{{$encategory->slug ?? ""}}" readonly="">

<label for="">Категорія</label>
<select class="form-control" name="category_id">
  <option value="0">-- без батьківської категорії --</option>
  @include('admin.encategory.partials.categories', ['encategories' => $encategories])
</select>

<hr />

<input class="btn btn-primary" type="submit" value="Зберегти">
