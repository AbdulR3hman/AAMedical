@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-ambulance fa-2x"></i> Available Ambulances</h1>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered jumbotron">
		</thead>
		<tr>
			<th class="">ID</th>
			<th class="">Plate NO.</th>
			<th class="">Date</th>
			<th class="">Type</th>
			<th class="">Edit</th>
			<th class="">Appointments</th>
		</tr>
	</th>
	
	@foreach ($ambs as $amb)
	<tbody>
		<td>{{ $amb->id}}</td>
		<td>{{ $amb->plate_number }}</td>
		<td>{{ $amb->enrollment }}</td>
		<td>{{ $amb->type }}</td>
		<td><a href="/ambs/show/{{$amb->id}}">Edit</a></td>
		<td><a href="/appointments/showAmb/{{$amb->id}}"> Show</a></td>
	</tbody>
	@endforeach
	
</table>
</div>
</div>
@endsection