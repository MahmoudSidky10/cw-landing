@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('danger'))
    <div class="alert alert-danger"
         style="font-weight: bold"> {{ Session::get('danger') }}</div>
@endif
