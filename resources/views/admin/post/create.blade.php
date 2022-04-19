@extends('admin.layouts.standard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>Create a new post</h1>

            <form method="POST" action="{{ route('admin.posts.store') }}">

                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
    </div>
</div>
@endsection