@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="icon-time fa-1x"></i> Appointment for: {{$pname}} </h1>
		</div>
		<form action ="/appointments/store" method="get" class="well">
			<div class="form-horizonal">
				<h4>Appointment Information</h4>
				<div class = "form-inline">
					<div class="form-group">
						<p><small>Choose Medic 1</small></p>
						<select multiple class="form-control" id="medic1" name="medic1" required>
							@foreach ($medics as $medic)
							<option value={{$medic->id}}>{{ $medic->first_name." ".$medic->last_name }}</option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<p><small>Choose Medic 2</small></p>
						<select multiple class="form-control" name="medic2" id="medic2" required>
							@foreach ($medics as $medic)
							<option value={{$medic->id}}> {{ $medic->first_name." ".$medic->last_name }}</option>
							@endforeach
							
						</select>
					</div>
					<div class="form-group">
						<p><small>Choose Ambulance</small></p>
						 <select multiple class="form-control" name="amb" id="amb" required>
							@foreach ($ambs as $amb)
							<option value={{$amb->id}} >{{ $amb->plate_number}}</option>
							@endforeach
						 </select>
					</div>
				</div>
				</br>
				<div class = "form-inline">
					<div class="form-group">
						<small>Pick From:   </small>
						<input type="text" class = "span 2" placeholder="Pick Address line 1" id="padd1" name="padd1" required> </input>
						<input type="text" class = "span 2" placeholder="Pick Address line 2" id="padd2" name="padd2" > </input>
						<input type="number" maxlength="7" class = "span 2" placeholder="Zip Code" id="pcode" name="pcode"  required> </input>
					</div>
				</div>
				<span></br></span>
				<div class = "form-inline">
					<div class="form-group">
						<small>Drop Off:      </small>
						<input type="text" class = "span 2" placeholder="Drop Address line 1" id="dadd1" name="dadd1" required> </input>
						<input type="text" class = "span 2" placeholder="Drop Address line 2" id="dadd2" name="dadd2" > </input>
						<input type="number" maxlength="7" class = "span 2" placeholder="Zip Code" id="dcode" name="dcode"  required> </input>
					</div>
				</div>
				<span></br></span>
					</div>
					
										<!-- Button -->
					<div class ="row">
						<div class="control-group">
							<label class="control-label" for="sumbit"></label>
							<div class="controls">
								<button id="sumbit" name="sumbit" class="btn btn-primary btn-lg">Submit</button>
								
								<a href="/patients/all">
								<button class="btn btn-primary btn-lg " type="button"> Cancel Changes
								</button></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
</div>
</div>

<script>


</script>
@endsection