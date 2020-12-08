@extends('layout')
@section('content')
<div>
    <h1>Login page</h1>

    <div class='col-sm-8'>
    <form method="POST" action="login">
    @csrf
        
        <div>
            <label >Email</label>
            <input type="text" name = 'email' class="form-control"  placeholder="Enter email">
          </div>

          <div>
            <label >Password</label>
            <input type="password" name = 'password' class="form-control"  placeholder="Enter password">
          </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</div>
@stop