function createEmployee(){
    var data = {
        'fname' : $('.fname').val(),
        'lname' : $('.lname').val(),
        'dept' : $('.selected').attr('id'),
        'email' :$('.email').val(),
        'mobile' : $('.mobile').val(),
    }

    var isInvalid = validateEmployee(data);
    if(isInvalid){
        console.log(isInvalid);
        $('#error_msg_add').text(isInvalid);
    }
    else{
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
}