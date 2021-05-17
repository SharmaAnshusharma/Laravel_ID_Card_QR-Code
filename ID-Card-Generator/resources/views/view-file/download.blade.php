<link rel="stylesheet" type="text/css" href="css/card.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin="anonymous"></script>

<div class="card-container" id="id-card">
	<h2 class="text-dark">Company Name</h2>
	<hr>

	<img class="round" src="storage/{{$downloads['profile']}}" height="100px" width="100px" alt="user" />
	<h3 class="text-dark"><b>{{$downloads['name']}}</b> </h3>
	<table class="table text-center" style="background-color:rgb(0 123 255 / 25%);color:black" >
		<tr>
			<th>ID No.</th><td>{{$downloads['id']}}</td>
		</tr>
		<tr>
			<th>DOB</th><td>01-02-1998</td>
		</tr>
		<tr>
			<th>Joining</th><td>{{$downloads['joining_date']}}</td>
		</tr>
		<tr>
			<th>Email</th><td>{{$downloads['email']}}</td>
		</tr>
		<tr>
			<th>Phone</th><td>{{$downloads['mobile']}}</td>
		</tr>
		
	</table>
	<hr>
	
    {!! QrCode::size(100)->generate('Employee ID:'.$downloads['id']) !!}
	<br><br>
	
	
</div>
<br>

</script>