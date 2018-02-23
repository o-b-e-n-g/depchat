@extends ('layouts.master')


@section ('content')

<div class="col-sm-8 blog-main">

	<h1>SEND MESSAGE TO</h1>

	<hr>

	<form method = "POST" action = "{{route('messages.store')}}">

		{{ csrf_field()}}

  

    <div class="form-group">
      <label for="body">Send message to</label>
      <select name = "recipient_id">

        @foreach ($courses as $course)
        <option value=" {{ $course->id }}"> {{ $course->course_name }} </option>
        @endforeach

      </select>
    </div>



    <div class="form-group">
      <label for="body">Message</label>
      <textarea id= "message" name="message" class="form-control" ></textarea>
    </div>


  <div class="form-group">

    <button type="submit" class="btn btn-primary">SEND</button>
  </div>

  @include('layouts.errors')

</form>




</div>

@endsection