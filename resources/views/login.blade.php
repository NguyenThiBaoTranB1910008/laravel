@extends('main')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif
<div class="row justify-content-center home">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#
		<span id ="sort"><i class="fa-solid fa-chevron-down" id = "filter_icon"></i></i></span>
	  </th>
      <th scope="col">First
	  </th>
      <th scope="col">Last
	  	<span id ="sort_date"><i class="fa-solid fa-chevron-down" id = "filter_date"></i></i></span>
	  </th>
    </th>
      <th scope="col">Last
	  	<span id ="sort_delivery">
        <span class="filter_delivery_icon">
          <i class="fa-solid fa-chevron-down" id="filter_delivery_date"></i>
        </span>
        <div class="fhs_top_languages_dropdown fhs_dropdown" id ="filter_delivery_dropdown">
            <select class="filter_delivery_select_year">
              <option value = 'all'>Năm</option>
              @foreach($year as $item)
              <option value = '{{$item}}'>{{$item}}</option>
              @endforeach
            </select>
            <select class='filter_delivery_select_month'>
                <option value = 'all'>Tháng</option>
                @foreach($month as $item)
                <option value = '{{$item}}'>{{$item}}</option>
                @endforeach
            </select>
        </div>
	    	</div>
      </span>
	  </th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($get_all_user as $item)
	  <tr>
      <th scope="row">{{$item -> idUser}}</th>
      <td>{{$item -> id}}</td>
      <td>{{$item -> date}}</td>
      <td>{{$item -> date}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection('content')