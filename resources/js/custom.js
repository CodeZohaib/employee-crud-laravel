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

	$('#editEmployeeForm').submit(function(e){
		e.preventDefault();		
		
		let formData = new FormData(this);

		$.ajax({
			url: $(this).attr('action'),
			method: $(this).attr('method'),
			data: formData,
			processData: false,
			contentType: false,
			success: function(response){

				$('.text-danger').html('');

				if(response.status === 'success')
				{
					$('#editEmployeeAlert').html(`<div class="alert alert-success"><center>${response.message}</center></div>`);
					shouldRefresh=true; // Set the flag to true to indicate a refresh is needed
				}
				else
				{
					$('#editEmployeeAlert').html(`<div class="alert alert-danger"><center>${response.message}</center></div>`);
				}
			},
			error: function(xhr) {
				// Clear previous errors
				$('.text-danger').html('');

				$('#editEmployeeAlert').html('');

				// Loop through Laravel validation errors
				let errors = xhr.responseJSON.errors;
				$.each(errors, function(field, messages) {
					$('#editEmployee-error-' + field).html(messages.join('<br>'));
				});
			}
		});
		
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
	});

	
	var editID;
	$('.edit').click(function(){
		editID = $(this).attr('edit');
$('.text-danger').html('');
		$.ajax({
			url: 'employee/' + encodeURIComponent(editID) + '/edit',
			type: 'GET',
			success: function(response){
				if(response.status === "success"){
					let emp = response.data;

					// Target only Edit form fields
					let form = $('#editEmployeeForm');

					let currentAction = $('#editEmployeeForm').attr('action');
                    $('#editEmployeeForm').attr('action', currentAction.replace('__ID__', encodeURIComponent(editID)));

				
					form.find('input[name="emp_id"]').val(editID); // Hidden field for employee ID
					form.find('input[name="emp_name"]').val(emp.full_name);
					form.find('input[name="emp_email"]').val(emp.email);
					form.find('textarea[name="emp_address"]').val(emp.address);
					form.find('input[name="emp_phone"]').val(emp.phone_no);

					// Select Gender (radio button only in edit form)
					form.find('input[name="emp_gender"][value="'+emp.gender+'"]').prop('checked', true);

					// Select Position (dropdown only in edit form)
					form.find('select[name="emp_position"]').val(emp.position);

					
					if(emp.profile_pic_path && emp.profile_pic_path!='profile_pictures/profile.jpg'){
						let preview = $('#editProfilePreview');
						preview.attr('src', '/storage/' + emp.profile_pic_path); // Laravel storage ka path
						preview.show();
					} else {
						$('#editProfilePreview').hide();
					}


					// Show Edit Modal
					$('#editEmployeeModal').modal('show');
				}
				else{
					$('#editEmployeeBody').html('<div class="alert alert-danger"><center>'+response.message+"</center></div>");
					$('#editEmployeeSubmit').hide();

				}
			}
		});
	});

	


	$('#addEmployeeModal,#deleteEmployeeModal,#deleteSingleEmployee,#editEmployeeModal').on('hidden.bs.modal', function () {
		if (shouldRefresh==true) {
			location.reload(); // Refresh the page
		}
	});




	
});