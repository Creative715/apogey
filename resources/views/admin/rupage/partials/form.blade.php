<label for="">Назва</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок товару" value="{{ old('title') ?? $rupage->title ?? ''}}" required>
<label for="">Адреса</label>
<input class="form-control" type="text" name="slug" placeholder="Генерується автоматично" value="{{ $rupage->slug ?? ''}}" readonly="">
<div class="form-group">
<label for="">Короткий опис</label>
<textarea class="form-control" id="intro" name="intro" cols="30" rows="4">{{ old('intro') ?? $rupage->intro ?? ''}}</textarea>
</div>
<div class="form-group">
  <input type="file" name="img" value="{{ old('img') ?? $rupage->img ?? ''}}">
</div>
<div class="form-group">
<label for="">Текст сторінки</label>
<textarea class="form-control" id="content" name="content" cols="30" rows="20">{{ old('content') ?? $rupage->content ?? ''}}</textarea>
</div>

<div class="form-group">
<label for="">Опис</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="2">{{ old('description') ?? $rupage->description ?? ''}}</textarea>
</div>

<hr />

<input class="btn btn-primary" type="submit" value="Зберегти">


