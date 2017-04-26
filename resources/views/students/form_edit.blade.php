@extends('layouts.app')

@section('content')
	<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="/students/save" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $student->id }}">
				<p>
					<label> Nume student: </label>
					<input type="text" name="name" value="{{ $student->name }}">
					<br>
					{{-- <label>Id clasa: </label>
					<input type="text" name="years_id" value="{{ $student->years_id }}"> --}}
				</p>
				<input type="submit" name="submit" value="salveaza">
					
					<select name="years_id">
						@foreach ($years as $year)
							<option value="{{ $year->id }}" 
								@if ($student->years_id == $year->id) selected @endif > 
								{{ $year->name}} 
							</option>
						@endforeach 
					</select>
			</form>
		</div>
	</div>
	</div>

@endsection