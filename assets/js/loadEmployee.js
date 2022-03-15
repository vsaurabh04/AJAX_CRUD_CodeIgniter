function loadEmployee(){
    $.ajax({
        type: "GET",
        url: "read",
        success: function (response) {
             console.log(response.deptids);

            $.each(response.joinedData, function (key, value) { 
                    $('.employeedata').append('<tr>\
                    <td class="emp_id">' + value['id'] + '</td>\
                    <td>' + value['fname'] + '</td>\
                    <td>' + value['lname'] + '</td>\
                    <td>' + value['dept'] + '</td>\
                    <td>' + value['dname'] + '</td>\
                    <td>' + value['dhead'] + '</td>\
                    <td>' + value['mobile'] + '</td>\
                    <td class = "text-center">\
                        <a href = "#" class = "badge btn-info view-btn">View</a>\
                        <a href = "#" class = "badge btn-primary edit-btn">Edit</a>\
                        <a href = "#" class = "badge btn-danger delete-btn">Delete</a>\
                    </td>\
                    </tr>');
            });
        }
    });
}