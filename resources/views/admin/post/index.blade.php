@extends('admin.layouts.standard');

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Create post</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Contenuto</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{substr($post->content, 0, 30)}}</td>
                                <td>{{$post->slug}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection