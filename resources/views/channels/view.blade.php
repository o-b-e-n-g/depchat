@extends ('layouts.master')


@section('content')


<table>
	<tr style="background-color:maroon; color:white; " >

		<thead>
			<th> Course ID </th>
			<th> Course Name</th>
			<th> Course Level</th>
		</tr>
		<tbody>

			@foreach ($courses as $course)
			<tr>
				<td>{{ $course->id }}</td>
				<td>{{ $course->course_name }}</td>
				<td>{{ $course->level }}</td> 

				<td>
					<form method = "POST" action = "{{ route('channels.destroy', $course->id) }}">
						<input type ="hidden" name="_method" value ="DELETE">  
						<input type ="hidden" name="_token" value = "{{ csrf_token()}}"> 
						<button type="submit" class="btn btn-primary">Delete Channel</button> 
						<a href="channels/{{ $course->id }}/edit"></a>
					</td>
				</tr>


				@endforeach


			</tbody>
		</thead>

	</table>



	@endsection