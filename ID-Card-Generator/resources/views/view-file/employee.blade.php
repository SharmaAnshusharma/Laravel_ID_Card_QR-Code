@extends('layouts.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
	<div class="container">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">Employee ID</th>	
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Mobile</th>
		      <th scope="col">View</th>
		      <th scope="col">Download</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@if(count($employees) > 0)
		  		@foreach($employees as $employee)
		    <tr class="table-active">
		      <td>id</td>
		      <td>{{$employee['name']}}</td>
		      <td>{{$employee['email']}}</td>
		      <td>{{$employee['mobile']}}</td>
		      <td><button type="button" class="btn btn-primary view" id="{{$employee['id']}}" data-toggle="modal" data-target="#myModal">View</button></td>
		      <td>
            <form method="post" action="downloads">
              @csrf
              <input type="hidden" name="emp_id" value="{{$employee['id']}}">
		      	<input type="submit" class="btn btn-primary download" value="Download" >
          </form>
          </td>
		     </tr>
		    	@endforeach
		    @endif
		</tbody>
	</table>
	</div>
	<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Employee Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <table class="table table-light">
       	<tr>
       		<th>Name</th><td id="name"></td>
       	</tr>
       	<tr>
       		<th>Email</th><td id="email"></td>
       	</tr>
       	<tr>
       		<th>Contact No.</th><td id="mobile"></td>
       	</tr>
       	<tr>
       		<th>Address</th><td id="address"></td>
       	</tr>
       	<tr>
       		<th>Joining Date</th><td id="date"></td>
       	</tr>
       	<tr>
       		<th>Department</th><td id="department"></td>
       	</tr>
       	<tr>
       		<th>Position</th><td id="position"></td>
       	</tr>
       	<tr>
       		<th>Profile</th><td id="profile"></td>
       	</tr>
       	

       </table>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@stop