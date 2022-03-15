function deleteEmployee(){
    var emp_id = $(".id_delete").text();
    $.ajax({
        type: "POST",
        url: "delete_employee",
        data: {
            'emp_id' : emp_id	
        },
        success: function (response) {
            console.log(response.status);
            $('#deleteConfirmModal').modal('hide');
            $('.employeedata').html("");
            loadEmployee();
        }
    });
}

function confirmModal(emp){
    $(".id_delete").text(emp['id']);
    $('.fname_delete').text(emp['fname']);
    $('.lname_delete').text(emp['lname']);
    $('.dept_delete').text(emp['dept']);
    $('.email_delete').text(emp['email']);
    $('.mobile_delete').text(emp['mobile']);

    $('#deleteConfirmModal').modal('show');
}