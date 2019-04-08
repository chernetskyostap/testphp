@foreach($posts as $post)
    <div class="card my-1">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Автор : {{$post->user->name}}</h6>
            <p class="card-text">{{$post->short_description}}</p>
            <p class="card-text">{{$post->description}}</p>
            <a href="{{route('blog.post', $post->slug)}}" class="card-link">Подробнее</a>
        </div>
    </div>
@endforeach