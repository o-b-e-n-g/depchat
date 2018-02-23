@extends ('layouts.master')


@section('content')

<div class="col-sm-8 blog-main">

	<h1>Edit a post</h1>

	<hr>

	<form method = "POST" action = "{{ route('members.update', $member->id) }}">

		<input type ="hidden" name="_method" value ="PUT">  
		<input type ="hidden" name="_token" value = "{{ csrf_token()}}"> 

		<div class="form-group">
			<label for="body">Member ID</label>
			<input type="text" class="form-control" id="id" name="id" value="{{$member->id}}">
		</div>
		<div class="form-group">
			<label for="body">Member Name</label>
			<input type="text" class="form-control" id="name" name="name" value="{{$member->name}}">
		</div>

		<input type="hidden" class="form-control" id="pin" name="pin" value="{{$member->pin}}">

		<div class="form-group">
			<label for="body">Member Level</label>
			<select name = "level">
				<option value="{{$member->level}}" selected>{{$member->level}}</option>
				<option value="100">  100 </option>
				<option value="200">  200 </option>
				<option value="300">  300 </option>
				<option value="400">  400 </option>   
			</select>
			
		</div>

		<div class="form-group">
			<label for="body">Member Status</label>
			<?php $member_type = $member->status; ?>
			

			@if($member_type == 0)
			
			<?php $member_type = 'Teacher'; ?>

			@else 
			<?php $member_type = 'Student'; ?>


			@endif
			<select name = "status">
				<option value="{{$member->status}}">  {{$member_type}} </option>
				<option value="0">  Lecturer </option>
				<option value="1"> Student </option>
			</select>
		</div>


		<div class="form-group">

			<button type="submit" class="btn btn-primary">Publish</button>
		</div>

		@include('layouts.errors')
		
	</form>

</div>

@endsection