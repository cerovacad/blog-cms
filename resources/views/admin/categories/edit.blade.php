@extends('layouts.app')

@section('content')
<div class="card">
    
    <div class="card-body">

        <h2 class="text-center card-title">Edit category</h2>        

        @include('../layouts/errors')

        <form action="/admin/categories/update/{{ $category->id }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Category name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}"required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Edit</button>
            </div>
        </form>

    </div>

</div>

@endsection