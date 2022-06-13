@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $erro)
            <p>{{ $erro }}</p>
        @endforeach
    </div>
@endif

@if(session('message'))
    <div class="alert alert-success">
            <p>{{ session('message') }}</p>
    </div>
@endif
