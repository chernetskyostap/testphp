@extends('profile.layouts.profile_app')

@section('content')
    <div class="container">
        @component('profile.components.breadcrumb')
            @slot('title') Список постов @endslot
            @slot('parent') Главная @endslot
            @slot('active') Посты @endslot
        @endcomponent

        <a href="{{route('profile.post.create')}}" class="btn btn-primary pull-right"><i
                    class="fa fa-fa-plus-square-o"></i>Создать новость</a>

        <hr/>

        @if(count($posts))
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Short description</th>
                    <th scope="col">Published</th>
                    <th scope="col"></th>
                </tr>

                </thead>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->short_description}}</td>
                        <td>{{$post->published}}</td>
                        <td class="text-right">
                            <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }"
                                  action="{{route('profile.post.destroy',$post)}}"
                                  method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                {{ csrf_field() }}

                                <a class="btn btn-default" href="{{route('profile.post.edit', $post)}}"><i
                                            class="fa fa-edit"></i></a>
                                <button class="btn" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $posts->links() }}
        @else
            <div class="text-center">Пусто</div>
        @endif
    </div>
@endsection
