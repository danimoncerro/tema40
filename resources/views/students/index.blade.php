@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Studenti</h1>

			<p>
				<a href="/students/create" class="btn btn-success">
					Adauga
				</a>
			</p>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Numele</th>
				<th>Clasa</th>
				<th>Actions</th>
			</tr>

			@foreach($students as $student)
				<tr>
					<td>{{ $student->id }}</td>
					<td>{{ $student->name }}</td>
					<td>{{ $student->year->name }}</td>
					<td>
						<a href="/students/{{ $student->id }}/edit" class="btn btn-primary">
							Editeaza
						</a>
						<a href="/students/{{ $student->id }}/delete" class="btn btn-danger">
							Sterge
						</a>
					</td>

					
				</tr>
			@endforeach

			</table>
		</div>
	</div>
	</div>


@endsection