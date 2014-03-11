@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-user-md fa-2x"></i> Available Medics</h1>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered jumbotron">
		</thead>
		<tr>
			<th class="">ID</th>
			<th class="">First name</th>
			<th class="">last name</th>
			<th class="">Address</th>
			<th class="">Zip Code</th>
			<th class="">Contact</th>
			<th class="">DoB</th>
			<th class="">Employment</th>
			<th class="">Edit</th>
			<th class="">Appointments</th>
		</tr>
	</th>
	
	@foreach ($medics as $medic)
	<tbody>
		<td>{{ $medic->id}}</td>
		<td>{{ $medic->first_name }}</td>
		<td>{{ $medic->last_name }}</td>
		<td>{{ $medic->line_add1 }}  {{$medic->line_add2}} </td>
		<td>{{ $medic->zip_code }}</td>
		<td>{{ $medic->contact }}</td>
		<td>{{ $medic->dob }}</td>
		<td>{{ $medic->enrollment_type }}</td>
		<td><a href="/medics/show/{{$medic->id}}">Edit</a></td>
		<td><a href="/appointments/showMedic/{{$medic->id}}"> Show</a></td>
	</tbody>
	@endforeach
	
</table>
</div>
</div>
@endsection