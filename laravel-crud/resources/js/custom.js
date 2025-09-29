$(document).ready(function() {

    let shouldRefresh = false; // Flag to track if refresh is needed

    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    var checkboxVal = [];

    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                checkboxVal[$(this).attr('class')] = $(this).val();
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                checkboxVal = [];
                this.checked = false;
            });
        }
    });

    checkbox.click(function() {
        if (!this.checked) {
            delete checkboxVal[$(this).attr('class')];
            $("#selectAll").prop("checked", false);
        } else {
            checkboxVal[$(this).attr('class')] = $(this).val();
        }
    });

    // Delete multiple records
    $('#deleteMultRecord').click(function(e) {
        e.preventDefault();
        var valuesArray = Object.values(checkboxVal);

        $.ajax({
            url: "/delete-multiple-employee",
            method: "POST",
            data: { deleteID: JSON.stringify(valuesArray) },
            success: function(response) {
                if (response.status == 'success') {
                    checkboxVal = [];
                    shouldRefresh = true;
                    $('#deleteEmployeeAlert').html(`<center>${response.message}</center>`);
                } else {
                    $('#deleteEmployeeAlert').html(`<center>${response.message}</center>`);
                }
            }
        });
    });

    // Clear delete modal alerts
    $('#deleteEmployeeModalbtn').click(function() {
        $('#deleteEmployeeAlert').html('');
    });

    // Clear add modal alerts
    $('#employeeModalbtn').click(function() {
        $('#addEmployeeAlert').html('');
        $('.text-danger').html('');
    });

    // Edit Employee Form
    $('#editEmployeeForm').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);

        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('.text-danger').html('');
                if (response.status === 'success') {
                    $('#editEmployeeAlert').html(`<div class="alert alert-success"><center>${response.message}</center></div>`);
                    shouldRefresh = true;
                } else {
                    $('#editEmployeeAlert').html(`<div class="alert alert-danger"><center>${response.message}</center></div>`);
                }
            },
            error: function(xhr) {
                $('.text-danger').html('');
                $('#editEmployeeAlert').html('');
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(field, messages) {
                    $('#editEmployee-error-' + field).html(messages.join('<br>'));
                });
            }
        });
    });

    // Add Employee Form
    $('#addEmployeeForm').submit(function(e) {
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
            success: function(response) {
                $('.text-danger').html('');
                $('#addEmployeeAlert').html(`<div class="alert alert-success"><center>${response.message}</center></div>`);
                shouldRefresh = true;
                $('#addEmployeeForm')[0].reset();
            },
            error: function(xhr) {
                $('.text-danger').html('');
                let errors = xhr.responseJSON.errors;
                $.each(errors, function(field, messages) {
                    $('#addEmployee-error-' + field).html(messages.join('<br>'));
                });
            }
        });
    });

    // Single Delete
    var emp_Delete_Id = null;
    $('.empDeleteBtn').click(function() {
        emp_Delete_Id = $(this).attr('delete');
    });

    $('#deleteSingleRecord').click(function() {
        if (emp_Delete_Id != null) {
            $.ajax({
                url: 'employee/' + emp_Delete_Id,
                type: 'DELETE',
                data: { employeeID: emp_Delete_Id },
                success: function(response) {
                    if (response.status == 'success') {
                        $('#deleteSingleEmployeeAlert').html(`<div class="alert alert-success"><center>${response.message}</center></div>`);
                    } else {
                        $('#deleteSingleEmployeeAlert').html(`<div class="alert alert-danger"><center>${response.message}</center></div>`);
                    }
                    shouldRefresh = true;
                }
            });
        }
    });

    // Edit Button Click
    var editID;
    $('.edit').click(function() {
        editID = $(this).attr('edit');
        $('.text-danger').html('');

        $.ajax({
            url: 'employee/' + encodeURIComponent(editID) + '/edit',
            type: 'GET',
            success: function(response) {
                if (response.status === "success") {
                    let emp = response.data;
                    let form = $('#editEmployeeForm');
                    let currentAction = form.attr('action');
                    form.attr('action', currentAction.replace('__ID__', encodeURIComponent(editID)));

                    form.find('input[name="emp_id"]').val(editID);
                    form.find('input[name="emp_name"]').val(emp.full_name);
                    form.find('input[name="emp_email"]').val(emp.email);
                    form.find('textarea[name="emp_address"]').val(emp.address);
                    form.find('input[name="emp_phone"]').val(emp.phone_no);
                    form.find('input[name="emp_gender"][value="' + emp.gender + '"]').prop('checked', true);
                    form.find('select[name="emp_position"]').val(emp.position);

                   // current base URL, automatically detects project folder
                    let baseUrl = window.location.origin + window.location.pathname.split('/employee')[0]; 

                    // ✅ image path
                    if (emp.profile_pic_path && emp.profile_pic_path != 'profile_pictures/profile.JPG') {
                        $('#editProfilePreview').attr('src', baseUrl + '/' + emp.profile_pic_path).show();
                    } else {
                        $('#editProfilePreview').hide();
                    }


                    $('#editEmployeeModal').modal('show');
                } else {
                    $('#editEmployeeBody').html('<div class="alert alert-danger"><center>' + response.message + "</center></div>");
                    $('#editEmployeeSubmit').hide();
                }
            }
        });
    });

    // Refresh on modal close if needed
    $('#addEmployeeModal,#deleteEmployeeModal,#deleteSingleEmployee,#editEmployeeModal').on('hidden.bs.modal', function() {
        if (shouldRefresh) location.reload();
    });

});
