@extends('layouts.app')
@section('content')

<div class="container">
	
   

    <center><h1>Todo list</h1></center>
      <br>
       <a href="{{route ('todos.create')}}" class="btn btn-info ">Create a New Item </a>

       <hr>
       <br>

            <table class="table table-striped table-hover ">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Created at</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
                @foreach($todos as $todo)
                <tr>
                  <td>{{$todo->id}}</td>

                  <td>
                   <a href="{{route ('todos.show' , $todo )}}" >{{$todo->title}}
                   </a>
                   </td>
                  
                  <td>{{$todo->body}}</td>
                  <td>{{$todo->created_at->diffForHumans()}}</td>
                  <td class="col-lg-3">
                     
                      <a href="{{route ('todos.show' , $todo )}}" class="btn btn-primary btn-sm">Show</a>

                      <a href="{{route ('todos.edit' , $todo )}}" class="btn btn-warning btn-sm">Edit</a>

                      <a href="{{ route('todo.get.destroy', $todo) }}" class="btn btn-danger btn-sm">Delete</a>
                      
                    
                      
                   
                  </td>
                </tr>
                @endforeach
                
               
              </tbody>
            </table> 

           
    
</div>
@endsection