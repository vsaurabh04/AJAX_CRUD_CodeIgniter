function loadEmployee(){
    $.ajax({
        type: "GET",
        url: "read",
        success: function (response) {
            depts = response.depts;
            console.log(response.joinedData)
            $.each(response.joinedData, function (key, value) { 
                    $('.employeedata').append('<tr>\
                    <td class="emp_id">' + value['id'] + '</td>\
                    <td class="emp_fname">' + value['fname'] + '</td>\
                    <td class="emp_lname">' + value['lname'] + '</td>\
                    <td class="emp_email">' + value['email'] + '</td>\
                    <td class="emp_mobile">' + value['mobile'] + '</td>\
                    <td class="emp_dept">' + value['dept'] + '</td>\
                    <td class="emp_dname">' + value['dname'] + '</td>\
                    <td class="emp_dhead">' + value['dhead'] + '</td>\
                    <td class = "text-center">\
                        <a href = "#" class = "badge btn-info view-btn">View</a>\
                        <a href = "#" class = "badge btn-primary edit-btn">Edit</a>\
                        <a href = "#" class = "badge btn-danger delete-btn">Delete</a>\
                    </td>\
                    </tr>');
            });
        },
        async : false
    });
    return depts;
}