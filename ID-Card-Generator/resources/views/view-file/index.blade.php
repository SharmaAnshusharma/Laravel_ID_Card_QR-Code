@extends('layouts.master')

@section('content')
<div class="container">
	<h3 class="text-center">Create ID Card of Employee with QR-Code</h3>
	<hr>
	<div class="container">
		<div class="row">
				<div class="col-sm-5">
					<form method="post" id="form_data" enctype="multipart/form-data" action="index">
					@csrf
					<div class="form-group">
					    <label for="name" class="text-info">Name :</label>
					    <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name">
					    <span class="text-danger error-text name_error"></span>
					</div>
					<div class="form-group">
					    <label for="email"  class="text-info">Email :</label>
					    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email">
					    <span class="text-danger error-text email_error"></span>
					</div>
					<div class="form-group">
					    <label for="contact" class="text-info">Contact :</label>
					    <input type="text" class="form-control" placeholder="Enter Contact No." name="mobile" id="mobile">
					    <span class="text-danger error-text mobile_error"></span>
					</div>
					<div class="form-group">
					    <label for="email"  class="text-info">Address :</label>
					    <input type="text" class="form-control" placeholder="Enter Address" name="address" id="address">
					    <span class="text-danger error-text address_error"></span>
					</div>

				</div>
				<div class="col-sm-5">
					<div class="form-group">
					    <label for="joining"  class="text-info">Joining Data :</label>
					    <input type="date" class="form-control" name="joining" id="joining">
					    <span class="text-danger error-text joining_error"></span>
					</div>
					<div class="form-group">
					    <label for="profile"  class="text-info">Profile :</label>
					    <input type="file" class="form-control" name="myfile" id="myfile">
					    <span class="text-danger error-text myfile_error"></span>
					</div>
					<div class="form-group">
					    <label for="email"  class="text-info">Department :</label>
					    <select name="department" class="form-control" name="department">
					    	<option value="">Select Department</option>
					    	<option value="A">A</option>
					    	<option value="B">B</option>
					    	<option value="C">C</option>
					    	<option value="D">D</option>
					    	<option value="E">E</option>
					    </select>
					    <span class="text-danger error-text department_error"></span>
					</div>
					<div class="form-group">
					    <label for="email"  class="text-info">Position :</label>
					    <select  class="form-control" name="position">
					    	<option value="">Select Department</option>
					    	<option value="A">A</option>
					    	<option value="B">B</option>
					    	<option value="C">C</option>
					    	<option value="D">D</option>
					    	<option value="E">E</option>
					    </select>
					</div>

				</div>

			<div class="d-grid gap-2">
				<br>
			  <input type="submit" name="submit" class=" btn btn-lg btn-outline-info btn col-sm-4 col-sm-8 col-sm-10" value="Save">
			</div>
		</form>
		</div>
	</div>
</div>
@stop
