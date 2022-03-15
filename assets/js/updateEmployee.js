function fetchForUpdate(emp_id){
    $.ajax({
        type: "POST",
        url: "edit_employee",
        data: {
            'emp_id' : emp_id
        },
        success: function (response) {
            $.each(response, function (key, emp) { 
                $("#id_edit").val(emp['id']);
                $("#fname_edit").val(emp['fname']);
                $("#lname_edit").val(emp['lname']);
                $("#dept_edit").val(emp['dept']);
                $("#mobile_edit").val(emp['mobile']);

                $('#employeeEditModal').modal('show');
            });
        }
    });
}


function updateEmployee(){
    var data = {
        'id' : $('#id_edit').val(),
        'fname' : $('#fname_edit').val(),
        'lname' : $('#lname_edit').val(),
        'dept' : $('#dept_edit').val(),
        'mobile' : $('#mobile_edit').val(),
    };

    $.ajax({
        type: "POST",
        url: "update_employee",
        data: data,
        success: function (response) {
            console.log(response.status);
            $('#employeeEditModal').modal('hide');
            $('.employeedata').html("");
            loadEmployee();
        }
    });
}