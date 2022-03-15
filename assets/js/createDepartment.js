function createDepartment(){
    var data = {
        'deptid' : $('.deptid').val(),
        'dname' : $('.dname').val(),
        'dhead' : $('.dhead').val(),
    }
    $.ajax({
        type: "POST",
        url: "create_department",
        data: data,
        success: function (response) {
            $('#departmentModal').modal('hide');
            $('#departmentModal').find('input').val('');
            $('.employeedata').html("");

            loadEmployee();
            console.log(response.status);
        }
    });
}