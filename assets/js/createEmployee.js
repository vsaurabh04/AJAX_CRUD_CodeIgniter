function createEmployee(){
    var data = {
        'fname' : $('.fname').val(),
        'lname' : $('.lname').val(),
        'dept' : $('.selected').attr('id'),
        'mobile' : $('.mobile').val(),
    }

    // console.log(data);

    $.ajax({
        type: "POST",
        url: "create",
        data: data,
        success: function (response) {
            $('#employeeModal').modal('hide');
            $('#employeeModal').find('input').val('');
            $('.selected').html("Select Department");
            $('.employeedata').html("");

            loadEmployee();
            console.log(response.status);
        }
    });
}