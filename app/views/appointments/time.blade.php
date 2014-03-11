@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="icon-time fa-1x"></i> Appointment for</h1>
		</div>
		<form action ="/appointments/add" method="get" class="well">
			<div class="form-horizonal">
				<h4>Appointment Information</h4>
				<div class = "form-inline">
				</div>
				<small>Date And Time: </small>
			</div>
			<div class = "form-inline">
				<div class="form-group">
					<div id="datetimepicker2" class="input-append date">
						<input data-format="hh:mm:ss" type="text" id="time" name="time" required></input>
						<span class="add-on">
						<i data-time-icon="icon-time" data-date-icon="icon-calendar">
						</i>
						</span>
					</div>
				</select>
			</div>
			<div class="form-group">
				
				<div id="datetimepicker1" class="input-append date">
					<input data-format="yyyy-MM-dd" type="text" id="date" name="date" required></input>
					<span class="add-on">
					<i data-time-icon="icon-time" data-date-icon="icon-calendar">
					</i>
					</span>
				</div>
			</div>
			
		</div>
		<!-- Button -->
		<div class ="row">
			<div class="control-group">
				<label class="control-label" for="sumbit"></label>
				<div class="controls">
					<button id="sumbit" name="sumbit" class="btn btn-primary btn-lg">Submit</button>
				</div>
				
			</div>
		</div>
	</form>
</div>
</div>
<script>
</script>
@endsection