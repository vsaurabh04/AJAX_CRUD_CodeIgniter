function createDepartment(){
    var data = {
        'deptid' : $('.deptid').val(),
        'dname' : $('.dname').val(),
        'dhead' : $('.dhead').val(),
    }

    var isInvalid = validateDepartment(data);
    if(isInvalid){
        console.log(isInvalid);
        $('#error_msg_dept').text(isInvalid);
    }
    else{
        $.ajax({
            type: "POST",
            url: "create_department",
            data: data,
            success: function (response) {
                $('#departmentModal').modal('hide');
                $('#departmentModal').find('input').val('');
                $('.employeedata').html("");

                depts = loadEmployee();
                console.log(response.status);
            },
            async:false
        });
    }
    return depts;
}