@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-wheelchair fa-2x"></i> Patients Management Panel</h1>
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
			<th class="">Clinic</th>
			<th class="">Edit</th>
			<th class="">Appointments</th>
		</tr>
	</th>
	
	@foreach ($patients as $patient)
	<tbody>
		<td>{{ $patient->id}}</td>
		<td>{{ $patient->first_name }}</td>
		<td>{{ $patient->last_name }}</td>
		<td>{{ $patient->line_add1 }}  {{ $patient->line_add2 }} </td>
		<td>{{ $patient->zip_code }}</td>
		<td>{{ $patient->contact }}</td>
		<td>{{ $patient->dob }}</td>
		<td>{{ $patient->doctor_name }}</td>
		<td><a href="/patients/show/{{$patient->id}}">Edit</a></td>
		<td><a href="/appointments/add/{{$patient->id}}">Add </a> || <a href="/appointments/show/{{$patient->id}}"> Show</a></td>
	</tbody>
	@endforeach
	
</table>
{{ $patients->links() }}
</div>
</div>
@endsection
