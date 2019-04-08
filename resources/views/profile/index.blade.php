@extends('profile.layouts.profile_app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href="{{route('profile.post.index')}}">
                    <div class="jumbotron">
                        <p class="text-center">Постов: {{$count_posts}}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
