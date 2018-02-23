@extends ('layouts.master')


@section ('content')

<div class="col-sm-8 blog-main">

	<h1>Add a Member</h1>

	<hr>

	<form method = "POST" action = "{{route('messages.store')}}">

		{{ csrf_field()}}

    <div class="form-group">
      <label for="body">Member ID</label>
      <input type="text" class="form-control" id="id" name="id" >
    </div>
    <div class="form-group">
      <label for="body">Member Name</label>
      <input type="text" class="form-control" id="name" name="name" >
    </div>

    <div class="form-group">
      <label for="body">Member Level</label>
      <select name = "level">
        <option value="100">  100 </option>
        <option value="200">  200 </option>
        <option value="300">  300 </option>
        <option value="400">  400 </option>   
      </select>
    </div>

    <input type="hidden" class="form-control" id="pin" name="pin" value="<?php echo mt_rand (10,100); ?>">

    
    <div class="form-group">
      <label for="body">Member Status</label>
      <select name = "status">
        <option value="0">  Lecturer </option>
        <option value="1"> Student </option>
      </select>
    </div>
    
    <div class="form-group">

      <button type="submit" class="btn btn-primary">Add</button>
    </div>

    @include('layouts.errors')
    
  </form>

  

  
</div>

@endsection