@if(count($errors))
    <div class="form-group">
        <ul class="list-group">
            @foreach($errors->all() as $err)
                <li class="list-group-item text-danger">{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif