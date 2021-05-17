<script type="text/javascript">
	$(document).ready(function(){
		$('#form_data').on('submit',function(e){
			e.preventDefault();
			var formData = new FormData(this);
			$.ajax({
				url:'index',
				type:'post',
				data:formData,
				cache:false,
				contentType:false,
				processData:false,
				dataType:'json',
				beforeSend:function()
				{
					$(document).find('span.error-text').text();
				},
				success:function(response)
				{
					console.log(response);
					if(response.status == 'success')
					{
						swal("Thanks!", "Data Inserted Successfully.", "success", {
						  button: "OK Done!",
						});	
						$("#form_data")[0].reset();
					}
					if(response.status == 0);
					{
						$.each(response.error, function(prefix, val){
	                        $('span.'+prefix+'_error').text(val[0]);
	                    });
					}
					
				}
			});
		});

		// employee details on Modal view

		$(document).on('click','.view',function(){
			var emp_id = $(this).attr('id');
			var token = $("meta[name='csrf-token']").attr("content");
			
			$('#myModal').modal('hide');
			$.ajax({
				url:'viewEmployee/'+emp_id,
				type:'post',
				data:{'emp_id':emp_id,'_token':token},
				success:function(response)
				{
					
					$('.modal-body #name').text(response.name);
					$('.modal-body #email').text(response.email);
					$('.modal-body #address').text(response.address);
					$('.modal-body #mobile').text(response.mobile);
					$('.modal-body #department').text(response.department);
					$('.modal-body #position').text(response.position);
					$('.modal-body #date').text(response.joining_data);
					$('.modal-body #profile').html('<img src="storage/'+response.profile+'" height="50px" width="50px">');


					$('#myModal').modal('show');
				}


			});
		});


		
	});
</script>

</body>
 </html>