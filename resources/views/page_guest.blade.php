@extends('main')

@section('content')

<div class="card">
	<form action="{{ route('filterdate') }}" method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		@csrf
		Start Date:
		<input type="date" name="start_date">
		<br>
		<br>
			
		End Date:
		<input type="date" name="end_date">
			
		<br>
			
		<input type="submit">
	</form>

	@foreach($get_all_user as $cate)
		<?php
            echo $cate->date;
		?>
    @endforeach
</div>

@endsection('content')