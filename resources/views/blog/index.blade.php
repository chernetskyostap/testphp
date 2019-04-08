@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="post-container">
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
        </div>
        <button id="ajax-posts" data-id="{{$posts[count($posts)-1]->id}}" data-offset="0" type="button" class="btn btn-lg btn-block btn-secondary my-2">Загрузить ещё</button>
            {{ $posts->links() }}
    </div>
@endsection
