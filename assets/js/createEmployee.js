function createEmployee(){
    var data = {
        'fname' : $('.fname').val(),
        'lname' : $('.lname').val(),
        'dept' : $('.dept').val(),
        'mobile' : $('.mobile').val(),
    }

    $.ajax({
        type: "POST",
        url: "create",
        data: data,
        success: function (response) {
            $('#employeeModal').modal('hide');
            $('#employeeModal').find('input').val('');
            $('.employeedata').html("");

            loadEmployee();
            console.log(response.status);
        }
    });
}