@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Anii de studiu</h1>

			<p>
				<a href="/years/create" class="btn btn-success">
					Adauga
				</a>
			</p>

			<table class="table table-bordered">
			<tr>
				<th>Id</th>
				<th>Numele</th>
				<th>Actions</th>
			</tr>

			@foreach($years as $year)
				<tr>
					<td>{{ $year->id }}</td>
					<td>{{ $year->name }}</td>
					<td>
						<a href="/years/{{ $year->id }}/edit" class="btn btn-primary">
							Editeaza
						</a>
						<a href="/years/{{ $year->id }}/delete" class="btn btn-danger">
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
