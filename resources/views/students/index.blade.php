@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Studenti</h1>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Numele</th>
				<th>Clasa</th>
			</tr>

			@foreach($students as $student)
				<tr>
					<td>{{ $student->id }}</td>
					<td>{{ $student->name }}</td>
					<td>{{ $student->class_id }}</td>
				</tr>
			@endforeach

			</table>
		</div>
	</div>
	</div>


@endsection