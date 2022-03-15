function viewEmployee(emp_id){
    $.ajax({
        type: "POST",
        url: "view_employee",
        data: {
            'emp_id' : emp_id
        },
        success: function (response) {
            $.each(response, function (key, emp) { 
                $('.id_view').text(emp['id']);
                $('.fname_view').text(emp['fname']);
                $('.lname_view').text(emp['lname']);
                $('.dept_view').text(emp['dept']);
                $('.mobile_view').text(emp['mobile']);
                $('#employeeViewModal').modal('show');
            });
        }
    });
}