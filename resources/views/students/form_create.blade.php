@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/students/save" method="post">
				{{ csrf_field() }}
				<p>
					<label> Nume student: </label>
					<input type="text" name="name" placeholder="Introduceti numele studentului">
					<br>
					<label>Id anul de studiu: </label>
					<input type="text" name="years_id" placeholder="Introduceti id-ul anlui de studiu">
				</p>
				<input type="submit" name="submit" value="Adauga student">

			</form>
		</div>
	</div>
	</div>

@endsection
