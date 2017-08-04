@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert" align="center" style="color:red">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </div>
@endif