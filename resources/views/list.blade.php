@extends('layout')

@section('content')
<div>
    <h1>List of Restaurants</h1>

    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Added successfully</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th> operations </th>
            
          </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
          <tr>
            <td scope="row">{{ $item ->id }}</td>
            <td scope="row">{{ $item ->name }}</td>
            <td scope="row">{{ $item ->email }}</td>
            <th scope="row">{{ $item ->address }}</td>
            <td> 
                <a href="delete/{{ $item ->id }}"><i class="fa fa-trash"></i></a>
                <a href="edit/{{ $item ->id }}"><i class="fa fa-edit"></i></a>

            </td>
            

            
          </tr>
          @endforeach
         
        </tbody>
      </table>  
        
</div>
    
@endsection