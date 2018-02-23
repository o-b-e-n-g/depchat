@extends ('layouts.master')


@section ('content')

<div class="col-sm-8 blog-main">

  <h1>Create a Channel</h1>

  <hr>

  <form method = "POST" action = "{{route('channels.store')}}">

    {{ csrf_field()}}

    <div class="form-group">
      <label for="body">Member ID</label>
      <select name = "member_id">
        
        @foreach ($members as $member)

        <option>  {{ $member->id }}  </option>

        @endforeach


      </select>
    </div>

    <div class="form-group">
      <label for="body">Course</label>
      <select name = "course_id">
        
        @foreach ($courses as $course)

        <option value="{{ $course->id }}">  {{ $course->course_name }}  </option>

        @endforeach


      </select>

    </div>
    
    <div class="form-group">

      <button type="submit" class="btn btn-primary">Save</button>
    </div>

    <div>




      @include('layouts.errors')
      
    </form>



    
  </div>



  @endsection