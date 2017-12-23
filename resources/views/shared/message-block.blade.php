@if($errors->any())
    <div class="row">
        <div class="col-md-4 col-lg-offset-4 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-lg-offset-4 success">
            {{ Session::get('message') }}
        </div>
    </div>
@endif