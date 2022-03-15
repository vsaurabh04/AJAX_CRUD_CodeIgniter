function deleteEmployee(emp_id){
    $.ajax({
        type: "POST",
        url: "delete_employee",
        data: {
            'emp_id' : emp_id	
        },
        success: function (response) {
            console.log(response.status);
            $('.employeedata').html("");
            loadEmployee();
        }
    });
}