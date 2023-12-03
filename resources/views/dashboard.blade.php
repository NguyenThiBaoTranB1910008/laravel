@extends('main')

@section('content')

<div class="card">
	<form action="/action_page.php">
		Start Date:
		<input type="date" name="bday">
		<br>
		<br>
			
		End Date:
		<input type="date" name="bday">
			
		<br>
			
		<input type="submit">
	</form>
</div>

@endsection('content')