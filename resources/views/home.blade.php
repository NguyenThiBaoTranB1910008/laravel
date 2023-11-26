@extends('main')

@section('content')

<div class="card">
	<div class="card-header">Dashboard</div>
	
	<select class="form-select" onClick = redirect()->route('login')>
		<option value=1 >1</option>
		<option value=2 >2</option>
		<option value=3 >3</option>
		<option value=4 >4</option>
	</select>

	<div class="card-body">
		{{$pj[0]->name}}
	</div>
</div>

@endsection('content')