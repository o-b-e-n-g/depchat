@extends ('layouts.master')


@section('content')


<table>
	<tr style="background-color:maroon; color:white; " >

		<thead>
			<th> ID </th>
			<th> Name</th>
			<th> Level</th>
			<th> Status </th>
		</tr>
		<tbody>

			@foreach ($members as $member)

			<?php $member_type = $member->status; ?>
			

			@if($member_type == 0)
			
				<?php $member->status = 'Teacher'; ?>

				 @else 
				<?php $member->status = 'Student'; ?>


				@endif

				<tr>
					<td>{{ $member->id }}</td>
					<td>{{ $member->name }}</td>
					<td>{{ $member->level }}</td> 
					<td>{{ $member->status }}</td> 
				

				<td>
					<form method = "POST" action = "{{ route('members.destroy', $member->id) }}">
						<input type ="hidden" name="_method" value ="DELETE">  
						<input type ="hidden" name="_token" value = "{{ csrf_token()}}"> 
						<button type="submit" class="btn btn-primary">Delete Member</button> 
						<a href="members/{{ $member->id }}/edit">Edit Member</a>
					</td>
				</tr>
				


				@endforeach
			</tbody>
		</thead>

	</table>



	@endsection