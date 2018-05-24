@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h2 class="text-center card-title">Create new post</h2>        
        
        @include('../layouts/errors')

        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="category">Select category</label>
                <select class="form-control" id="category" name="category" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="featured">Upload image</label>
                <input type="file" class="form-control-file" id="featured" name="featured">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>
    </div>
</div>
@endsection