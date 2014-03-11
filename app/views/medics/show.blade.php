@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-user-md fa-2x"></i> Editing Medic: {{$medic->id}} </h1>
		</div>
		<form action ="/medics/edit/{{$medic->id}}" method="get" class="well">
			<div class="form-horizonal">
				<h4>Personal Information</h4>
				<div class = "form-inline">
					<div class="form-group">
						<p><small>Full Name</small></p>
						<input type="text" class = "span 2" placeholder="First Name" id="firstname" name="firstname" value ="{{$medic->first_name}}"required> </input>
						<input type="text" class = "span 2" placeholder="Last Name" id="lastname" name="lastname" value ="{{$medic->last_name}}" required> </input>
					</div>
				</div>
				</br>
				<div class = "form-inline">
					<div class="form-group">
						<input type="number" maxlength="9" min="000000000" max="999999999" step="5" class="span2" placeholder="SSN" id="SSN" value ="{{$medic->SSN}}" name="SSN" required>
						<input type="text" class = "span2" placeholder="Contact number" id="contact" name="contact" value ="{{$medic->contact}}"required> </input>
					</div>
				</div>
				<span></br></span>
				
				<div class = "form-inline">
					<div class="form-group">
						<small>Address:</small>
					</div>
				</div>
				<div class = "form-inline">
					<div class="control-group">
						<input type="text" class = "span 2" placeholder="Address line 1" id="add1" name="add1" value ="{{$medic->line_add1}}"required> </input>
						<input type="text" class = "span 2" placeholder="Address line 2" id="add2" name="add2" value ="{{$medic->line_add2}}"> </input>
						<input type="number" maxlength="7" class = "span 2" placeholder="Zip Code" id="pcode" name="pcode" value ="{{$medic->zip_code}}" required> </input>
					</div>
					<div>
						<input type="text" class = "span 2" placeholder="Employment Type" id="enrotype" name="enrotype" value ="{{$medic->enrollment_type}}"required> </input>
						<input type="date" class = "span 2" placeholder="Employment Date" id="enrodate" name="enrodate" value ="{{$medic->enrollment_date}}"required> </input>
						<small>Avalaibe?</small>
						<label class="radio-inline">
							<input type="radio" id="aval" name="aval" value="1" {{{ $medic->avaliable == 1 ? 'checked':''}}}> Yes
						</label>
						<label class="radio-inline">
							<input type="radio" id="aval" name="aval" value="0" {{{ $medic->avaliable == 0 ? 'checked':''}}}> No
						</label>						</br>
						<span class="row">
						<label>
							<textarea class="form-control" rows="5" cols="50" id="notes" name="notes" >{{$medic->notes}}
							</textarea>
						</label>
						</span>
					</div>
					
					<!-- Button -->
					<div class ="row">
						<div class="control-group">
							<label class="control-label" for="sumbit"></label>
							<div class="controls">
								<button id="sumbit" name="sumbit" class="btn btn-primary btn-lg">Submit</button>
								
								<a href="/medics/all">
								<button class="btn btn-primary btn-lg " type="button"> Cancel Changes
								</button></a>
								<a href="/medics/remove/{{$medic->id}}">
								<button class="btn btn-danger btn-lg " type="button"> Remove
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
@endsection