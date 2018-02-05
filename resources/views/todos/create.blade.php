
@extends('layouts.app')
@section('content')

<div class="container">
	@include('errors.error')
	<br>
	<form class="form-horizontal" action="/todos" method="POST">
		{{csrf_field()}}
	  <fieldset><br>
	    <legend>Create a new Todo</legend>
	    <div class="form-group">
	      <label for="title" class="col-lg-2 control-label">Title</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
	      </div>
	    </div>
	    <div class="form-group">
	      <label for="content" class="col-lg-2 control-label">Content</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" id="body" name="body" placeholder="content">
	      </div>
	    </div>

	     <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	        <button type="reset" class="btn btn-default">Cancel</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	        
	      </div>
         </div>
	</fieldset>
	</form>


		 <div  style="margin-left: 5px;">
		 <a href="/todos"><button  class="btn btn-info">Back</button></a>
		</div>
</div>	
@endsection