$(document).ready(function(){

	 let shouldRefresh = false; // Flag to track if refresh is needed
	// Refresh the page when the modal is closed if needed

	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');

	var checkboxVal=[];
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				checkboxVal[$(this).attr('class')]=$(this).val();
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				checkboxVal=[];
				this.checked = false;                        
			});
		} 
		//console.log(checkboxVal);
	});

	checkbox.click(function(){
		if(!this.checked){
			
			delete checkboxVal[$(this).attr('class')];
			
			$("#selectAll").prop("checked", false);
		}
		else
		{
			checkboxVal[$(this).attr('class')]=$(this).val();
		}

		//console.log(checkboxVal);
	});

	$('#deleteMultRecord').click(function(e){
		 e.preventDefault(); 
		var valuesArray = Object.values(checkboxVal);

		$.ajax({
			url: "/delete-multiple-employee",
			method: "POST",		
			data: { deleteID: JSON.stringify(valuesArray) },
			success: function(response) 
			{
				if(response.status=='success')
				{
					checkboxVal=[];
					shouldRefresh=true; // Set the flag to true to indicate a refresh is needed
					$('#deleteEmployeeAlert').html(`<center>${response.message}</center>`);
				}
				else
				{
					$('#deleteEmployeeAlert').html(`<center>${response.message}</center>`);
				}
			}
		});
	});

	$('#deleteEmployeeModalbtn').click(function(){
		// Clear previous alerts and errors
		$('#deleteEmployeeAlert').html('');	
	});

	
	
	$('#employeeModalbtn').click(function(){
		// Clear previous alerts and errors
		$('#addEmployeeAlert').html('');	
		$('.text-danger').html('');
	
 	});


	$('#addEmployeeForm').submit(function(e){
    e.preventDefault();

		$('#addEmployeeAlert').html('');
		$('.text-danger').html('');

		let formData = new FormData(this);

		$.ajax({
			url: $(this).attr('action'),
			method: $(this).attr('method'),
			data: formData,
			processData: false,
			contentType: false,
			success: function(response){

				$('.text-danger').html('');

				$('#addEmployeeAlert').html(
					`<div class="alert alert-success"><center>${response.message}</center></div>`
				);
				shouldRefresh=true; // Set the flag to true to indicate a refresh is needed
				// Reset form fields
			    $('#addEmployeeForm')[0].reset();
			},
			error: function(xhr) {
				// Clear previous errors
				$('.text-danger').html('');

				// Loop through Laravel validation errors
				let errors = xhr.responseJSON.errors;
				$.each(errors, function(field, messages) {
					$('#addEmployee-error-' + field).html(messages.join('<br>'));
				});
			}

		});
    });

	var emp_Delete_Id=null;

	$('.empDeleteBtn').click(function(){
		emp_Delete_Id=$(this).attr('delete');
	});

	$('#deleteSingleRecord').click(function(){
		if(emp_Delete_Id!=null)
		{
			$.ajax({
				url:'employee/'+emp_Delete_Id,
				type:'DELETE',
				data:{'employeeID':emp_Delete_Id},
				success:function(response)
				{
					if(response.status=='success')
					{
						$('#deleteSingleEmployeeAlert').html(`<div class="alert alert-success"><center>${response.message}</center></div>`);
					}
					else
					{
						$('#deleteSingleEmployeeAlert').html(`<div class="alert alert-danger"><center>${response.message}</center></div>`);
					}

					shouldRefresh=true; // Set the flag to true to indicate a refresh is needed
				}
			})
		}
	})

	$('#addEmployeeModal,#deleteEmployeeModal,#deleteSingleEmployee').on('hidden.bs.modal', function () {
		if (shouldRefresh==true) {
			location.reload(); // Refresh the page
		}
	});




	
});