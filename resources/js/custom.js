$(document).ready(function(){

	 console.log("✅ Custom.js Loaded");

	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			
			$("#selectAll").prop("checked", false);
		}
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


	
});