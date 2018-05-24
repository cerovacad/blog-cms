@extends('layouts.app')

@section('content')
<div class="card">
    
    <div class="card-body">

        <h2 class="text-center card-title">Create new category</h2>        
        
        @include('../layouts/errors')

        <form action="{{ route('categories.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Category name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>

    </div>

</div>

@endsection