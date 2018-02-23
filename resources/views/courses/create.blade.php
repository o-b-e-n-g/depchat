@extends ('layouts.master')


@section ('content')

<div class="col-sm-8 blog-main">

	<h1>Create a post</h1>

	<hr>

	<form method = "POST" action = "{{route('courses.store')}}">

		{{ csrf_field()}}

    <div class="form-group">
      <label for="body">Course ID</label>
      <input type="text" class="form-control" id="course_id" name="id" >
    </div>
    <div class="form-group">
      <label for="body">Course Name</label>
      <input type="text" class="form-control" id="course_name" name="course_name" >
    </div>

    <div class="form-group">
      <label for="body">Course Level</label>
      <input type="text" class="form-control" id="course_level" name="level" >
    </div>
    
    <div class="form-group">

      <button type="submit" class="btn btn-primary">Publish</button>
    </div>

    @include('layouts.errors')
    
  </form>

  

  
</div>

@endsection