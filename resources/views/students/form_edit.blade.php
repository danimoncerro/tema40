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
				
					
					<select name="year_id">
						@foreach ($years as $year)
							<option value="{{ $year->id }}" 
								@if ($student->year_id == $year->id) selected @endif > 
								{{ $year->name}} 
							</option>
						@endforeach 
					</select>
					<br>
					<input type="submit" name="submit" value="salveaza">
			</form>
		</div>
	</div>
	</div>

@endsection