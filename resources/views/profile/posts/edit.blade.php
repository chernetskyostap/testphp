@extends('profile.layouts.profile_app')

@section('content')

    <div class="container">

        @component('profile.components.breadcrumb')
            @slot('title') Редактирование поста @endslot
            @slot('parent') Главная @endslot
            @slot('active') Редактирование @endslot
        @endcomponent

        <hr>

        <form action="{{route('profile.post.update', $post)}}" class="form-horizontal" method="POST">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}


            @include('profile.posts.partials.form')
        </form>
    </div>
@endsection
