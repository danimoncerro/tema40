@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/years/save" method="post">
				{{ csrf_field() }}
				<p>
					<label> Nume an de studiu: </label>
					<input type="text" name="name" placeholder="Introduceti anul de studiu">
				</p>
				<input type="submit" name="submit" value="Adauga an de studiu">
			</form>
		</div>
	</div>
	</div>

@endsection