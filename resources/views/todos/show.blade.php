@extends('layouts.app')

@section('content')

<div class="container">
	       




         <legend>Show a single Todo</legend>
        <div class="form-group">
          <label for="title" class="col-lg-2 control-label">Title</label>
          <div class="col-lg-10">
            <ul class="breadcrumb">
                <li class="active">{{$todo->title}}</li>
            </ul>
          </div>
        </div>
        <br>
        <div class="form-group">
          <label for="content" class="col-lg-2 control-label">Content</label>
          <div class="col-lg-10">
             <ul class="breadcrumb">
                <li class="active">{{$todo->body}}</li>
            </ul>
          </div>
        </div>

         <div class="form-group">
            <div class="col-lg-8 col-lg-offset-2">
         @foreach($todo->comments as $comment)
               <blockquote>
                  <p>{{$comment->body}}</p>
                  <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                </blockquote>      

      
        @endforeach
         </div>
        </div>




<div class="col-lg-12 " >
   <form  action="{{route('todocomment.store',$todo)}}" method="POST">
        {{csrf_field()}}
      <fieldset><br>
        <legend>Create a new comment</legend>
        <div class="form-group">
          <label for="body" class="col-lg-2 control-label">Comment</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" id="body" placeholder="Comment" name="body">
          </div>
        </div>
       

         <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
           <br>
            <button type="submit" class="btn btn-primary">Add</button>
            
          </div>
         </div>
    </fieldset>
    </form>
</div>
        
        <div class="col-lg-1">
            <br>
         <a href="/todos"><button  class="btn btn-info">Back</button></a>
        </div> 
            
       
</div>

@endsection('content')