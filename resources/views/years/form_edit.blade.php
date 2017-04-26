@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/years/save" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $year->id }}">
				<p>
					<label> Nume an de studiu: </label>
					<input type="text" name="name" value="{{ $year->name }}">
				</p>
				<input type="submit" name="submit" value="salveaza">
			</form>
		</div>
	</div>
	</div>

@endsection