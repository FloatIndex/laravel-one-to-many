@extends('admin.layouts.standard');

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <a href="{{ route('admin.posts.create') }}" class="btn btn-primary my-3">Create post</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Contenuto</th>
                            <th scope="col">Slug</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr class="align-middle">
                                <th scope="row">1</th>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{substr($post->content, 0, 30)}}</td>
                                <td>{{$post->slug}}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('admin.posts.show', $post) }}">Show</a>
                                    <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post) }}">Edit</a>
                                    <form class="d-inline-block" method="POST" action="{{ route('admin.posts.destroy', $post) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection