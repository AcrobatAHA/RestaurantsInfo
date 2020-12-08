@extends('layout')

@section('content')

<div class="col-sm-6">
    <h1>Add restaurant name</h1>

    <form method="POST" action="add">
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
        <label >Address</label>
          <input type="text" name = 'address' class="form-control"  placeholder="Enter address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@stop
