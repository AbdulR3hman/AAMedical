@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-wheelchair fa-2x"></i> Add  Patient</h1>
		</div>
		<form action ="/patients/store" method="get" class="well">
			<div class="form-horizonal">
				<h4>Personal Information</h4>
				<div class = "form-inline">
					<div class="form-group">
						<p><small>Full Name</small></p>
						<input type="text" class = "span 2" placeholder="First Name" id="firstname" name="firstname" required> </input>
						<input type="text" class = "span 2" placeholder="Last Name" id="lastname" name="lastname" required> </input>
					</div>
				</div>
				</br>
				<div class = "form-inline">
					<div class="form-group">
						<input type="number" maxlength="9" min="000000000" max="999999999" step="5" class="span2" placeholder="SSN" id="SSN" name="SSN" required>
						<input type="text" class = "span2" placeholder="Contact number" id="contact" name="contact" required> </input>
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
						<input type="text" class = "span 2" placeholder="Address line 1" id="add1" name="add1" required> </input>
						<input type="text" class = "span 2" placeholder="Address line 2" id="add2" name="add2"> </input>
						<input type="number" maxlength="7" class = "span 2" placeholder="Zip Code" id="pcode" name="zcode" required> </input>
					</div>
				</div>
				<span></br></span>
				<div class = "form-inline">
					<div class="form-group">
						<small>Medical Info:</small>
					</div>
				</div>
				<div class = "form-inline">
					<div class="form-group">
						<input type="text" class = "span 2" placeholder="Clinic Name" id="clinic" name="clinic" required> </input>
						<input type="text" class = "span 3" placeholder="Address line 1" id="cadd1" name="cadd1"  required > </input>
						<input type="text" class = "span 3" placeholder="Address line 2" id="cadd2" name="cadd2" > </input>
						<input type="number" min='0000' class = "span 2" placeholder="Zip Code" id="cliniczipcode" name="cliniczipcode" required> </input>
					</div>
				</div>
				</br>
				<div class = "form-inline">
					<div class="form-group">
						<input type="date" class = "span 2" placeholder="Date of birth" class = "span 2" required id="dob" name="dob"  > </input>
						<input type="number" maxlength="3" step="any" max ='2.5' class = "span 2" placeholder="Height M" id="height" name="height" required> </input>
						<input type="number" maxlength="3"  class = "span 2" placeholder="Weight KG" id="weight" name="weight" required> </input>
						<input type="number" maxlength="3"  class = "span 2" placeholder="Failure %" id="failure" name="failure" required> </input>
					</div>
				</div>
				<div class = "form-inline">
					<br>
					<small> Type of Transportation</small>
					<div class="radio" required>
						<label>
							<input type="radio" name="transport" id="transport" value="1" checked>
							Full (type 1)
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="transport" id="transport" value="2" class = "span 2">
							Full (type 2)
						</label>
					</div>
					<span></br></span>
					<br>
					<small> Type of Schedule</small>
					<div class="radio" required>
						<label>
							<input type="radio" name="schedule" id="schedule" value="1" checked>
							type 1
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="schedule" id="schedule" value="2">
							type 2
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="schedule" id="schedule" value="3">
							type 3
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="schedule" id="schedule" value="4">
							Emergency
						</label>
					</div>
					</br>
					<div class="radio">
						<label>
							<textarea class="form-control" rows="5" cols="50" placeholder="Describe yourself here..." id="notes" name="notes">
							</textarea>
						</label>
					</div>
					</br>
					
					<!-- Button -->
					<div class ="row">
						<div class="span6">
							<div class="control-group">
								<label class="control-label" for="sumbit"></label>
								<div class="controls">
									<button id="sumbit" name="sumbit" class="btn btn-primary btn-lg btn-block">Submit</button>
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