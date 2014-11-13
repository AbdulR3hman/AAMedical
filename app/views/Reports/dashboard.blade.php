@extends('layouts.master')
@section('main')
<div id="apps_per_month"
	data-jan="{{$data[0]}}"
	data-feb="{{$data[1]}}"
	data-mar="{{$data[2]}}"
	data-apr="{{$data[3]}}"
	data-may="{{$data[4]}}"
	data-jun="{{$data[5]}}"
	data-jul="{{$data[6]}}"
	data-aug="{{$data[7]}}"
	data-sept="{{$data[8]}}"
	data-oct="{{$data[9]}}"
	data-nov="{{$data[10]}}"
	data-dec="{{$data[11]}}"
></div>

<div class="panel panel-default">
</br>
	<div class="panel-body">
		<center>
		<canvas id="canvas" height="450" width="800">
		</center>
	</div>
	<div class="panel-footer"> Appointments Per Month</canvas></div>
</div>
@endsection
