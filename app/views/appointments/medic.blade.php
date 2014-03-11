@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-calendar fa-2x"></i> Appointments For Medic: {{$medic}}</h1>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered jumbotron">
		</thead>
		<tr>
			<th class="">ID</th>
			<th class=""> Patient ID</th>
			<th class="">Ambulance ID</th>
			<th class="">Pickup Address 1</th>
			<th class="">Pickup Address 2</th>
			<th class="">Pickup ZipCode</th>
			<th class="">Dropoff Address 1</th>
			<th class="">Dropoff Address 2</th>
			<th class="">DropOff ZipCode</th>
			<th class="">Date</th>
			<th class="">Time</th>
		</tr>
	</th>
	@foreach ($apps as $app)
	<tbody>
		<td>{{ $app->id}}</td>
		<td><a href="/patients/show/{{$app->patient_id}}">{{$app->patient_id }}</a></td>
		<td><a href="/ambs/show/{{$app->ambulance_id}}">{{$app->ambulance_id}}</a></td>
		<td>{{$app->from_add_1}}</td>
		<td>{{ $app->from_add_2}} </td>
		<td>{{ $app->from_zip_code}}</td>
		<td>{{ $app->to_add_1 }} </td>
		<td>{{$app->to_add_2}} </td>
		<td>{{ $app->to_zip_code}}</td>
		<td>{{ $app->date}}</td>
		<td>{{ $app->time}}</td>
	</tbody>
	@endforeach
</table>
</div>
</div>
@endsection