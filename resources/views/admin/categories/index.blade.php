@extends('layouts.app')

@section('content')
<div class="card">
    
    <div class="card-body">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-8">{{ $category->name }}</div>
                        @if($category->name !== 'JS' && $category->name !== 'PHP')
                            <div class="col-2">
                                <a href="/admin/categories/edit/{{$category->id}}">Edit</a>
                            </div>
                            <div class="col-2">
                                <a href="/admin/categories/destroy/{{$category->id}}">Delete</a>
                            </div>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

</div>

@endsection