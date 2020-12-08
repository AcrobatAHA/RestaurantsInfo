@extends('layout')

@section('content')

<div class="col-sm-6">
    <h1>Edit Restaurant info</h1>

    <form method="POST" action="/edit">
        @csrf

        <div>
          <label >Name</label>
          <input type="hidden" name = 'id' value="{{$data->id}}" >

          <input type="text" name = 'name' class="form-control" value="{{$data->name}}" placeholder="Enter name">
        </div>
        <div>
        <label >Email</label>
          <input type="text" name = 'email' class="form-control" value="{{$data->email}}" placeholder="Enter email">
        </div>

        <div>
        <label >Address</label>
          <input type="text" name = 'address' class="form-control" value="{{$data->address}}" placeholder="Enter address">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@stop
