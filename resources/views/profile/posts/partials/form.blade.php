<label for="">Статус</label>
<select name="published" class="form-control">
    @if(isset($post->id))
        <option value="0" @if ($post->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1" @if ($post->published == 1) selected="" @endif>Опубликовано</option>
    @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории" value="{{$post->title ?? ""}}" required>

<label for="">Slug (Уникальное значение)</label>
<input type="text" class="form-control" name="slug" placeholder="Автоматическая генерация" value="{{$post->slug ?? ""}}" readonly="">


<label for="">Краткое описание</label>
<textarea name="short_description" id="short_description" class="form-control">{{$post->short_description ?? ""}}</textarea>

<label for="">Полное описание</label>
<textarea name="description" id="description" class="form-control">{{$post->description ?? ""}}</textarea>



<input class="btn btn-primary" type="submit" value="Сохранить">
