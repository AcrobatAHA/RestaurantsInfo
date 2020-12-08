@extends('layout')
@section('content')
<div>
    <h1>User Registration page</h1>

    <div class='col-sm-8'>
    <form method="POST" action="register">
    @csrf
        <div>
          <label >Name</label>
          <input type="text" name = 'name' class="form-control"  placeholder="Enter name">
        </div>

        <div>
            <label >Email</label>
            <input type="text" name = 'email' class="form-control"  placeholder="Enter email">
          </div>

          <div>
            <label >Password</label>
            <input type="password" name = 'password' class="form-control"  placeholder="Enter password">
          </div>

          <div>
            <label >Contact no</label>
            <input type="text" name = 'contace' class="form-control"  placeholder="Enter contact number">
          </div>
    

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

</div>
@stop