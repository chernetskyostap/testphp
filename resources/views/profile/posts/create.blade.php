@extends('profile.layouts.profile_app')

@section('content')

    <div class="container">

        @component('profile.components.breadcrumb')
            @slot('title') Создание поста @endslot
            @slot('parent') Главная @endslot
            @slot('active') Создание @endslot
        @endcomponent

        <hr>

            <form action="{{route('profile.post.store')}}" class="form-horizontal" method="POST">
                {{ csrf_field() }}

                {{-- FORM INCLUDE --}}
                @include('profile.posts.partials.form')

            </form>
    </div>
@endsection
