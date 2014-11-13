@extends('layouts.master')
@section('main')
<div class="panel panel-default">
	<div class="panel-body">
		<div class="page-header">
			<h1><i class="fa fa-ambulance fa-2x"></i> Create New Ambulance</h1>
		</div>
		<form action ="/ambs/store" method="get" class="well">
			<div class="form-horizonal">
				<h4>Personal Information</h4>
				<div class = "form-inline">
					<div class="form-group">
						<p><small>Full Name</small></p>
						<input type="text" class = "span 2" placeholder="Plate Number" id="plate" name="plate" required> </input>
						<input type="date" class = "span 2" placeholder="Enrollment Date" id="enro" name="enro"  required> </input>
					<input type="number" maxlength="1" min="0" max="3" step="1" placeholder="Ambulance Type" id="type" name="type" required>

					</div>
				</div>
				</br>
								
					<!-- Button -->
					<div class ="row">
						<div class="control-group">
							<label class="control-label" for="sumbit"></label>
							<div class="controls">
								<button id="sumbit" name="sumbit" class="btn btn-primary btn-lg">Submit</button>
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
