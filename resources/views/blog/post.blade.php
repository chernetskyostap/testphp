@extends('layouts.app')

@section('title',$post->title)
@section('content')

    <div class="container">
        <div class="card my-1">
            <div class="card-body">
                <h1 class="card-title text-center">{{$post->title}}</h1>
                <p class="card-text text-center">{{$post->short_description}}</p>
                <p class="card-text">{{$post->description}}</p>
                <h6 class="card-subtitle mb-2 text-muted text-right">Автор : {{$post->user->name}}</h6>
                <h6 class="card-subtitle mb-2 text-muted text-right">Создано : {{$post->created_at->format('d-m-Y')}}</h6>
            </div>
        </div>
        @auth
            <form class="my-2" method="POST" action="{{ route('blog.post.add_comment') }}">
                @csrf
                <div class="form-group">
                    <label for="">Напишите свой комментарий :</label>
                    <textarea class="form-control" name="text" rows="3"></textarea>
                </div>
                <input type="hidden" name="user_id" id="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="post_id" id="post_id" value="{{$post->id}}">
                <button type="submit" class="btn btn-secondary btn-lg btn-block">Добавить комментарий</button>
            </form>
        @endauth
        <p>Комментарии :</p>
        @forelse($comments as $comment)

            <div class="card my-1">
                <div class="card-body">
                    <h4 class="card-title">Пользователь : {{$comment->user->name}}</h4>
                    <p class="card-text">{{$comment->text}}</p>
                </div>
            </div>
        @empty
            <h2 class="text-center">Пусто</h2>
        @endforelse
    </div>
@endsection
