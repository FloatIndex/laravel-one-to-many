@extends('admin.layout.standard')

@section('content')
    <h1>{{$post->title}}</h1>
    <h3>{{$post->slug}}</h3>
    <p>{{$post->content}}</p>
@endsection