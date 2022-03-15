$(document).ready(function () {
    
    let depts = loadEmployee();

    // Dropdown text select Add Employee Modal
    $(document).on('click','.dept_drop a', function () {
        console.log($(this).attr('id'));     
        $('.selected').html($(this).text());
        $('.selected').attr('id', ($(this).attr('id')));
    });

    // Dropdown text select for Edit Employee Modal
    $(document).on('click','.dept_drop_edit a', function () {
        console.log($(this).attr('id'));     
        $('.selected_edit').html($(this).text());
        $('.selected_edit').attr('id', ($(this).attr('id')));
    });

    $(document).on('click','.add_emp', function () {
        $('.dept_drop').html("");
        $.each(depts, function (key, dept) { 
            $('.dept_drop').append('<a class="dropdown-item" href="#" id='+ dept.deptid +'>'+dept.dname+'</a>');
        });
    });

    $(document).on('click', '.emp-save', function () {
        createEmployee();
    });

    $(document).on('click', '.dept-save', function () {
        depts = createDepartment();
    });

    $(document).on('click', '.view-btn', function () {
        var emp_id = $(this).closest('tr').find('.emp_id').text();
        viewEmployee(emp_id);
    });

    $(document).on('click', '.edit-btn', function () {
        var emp_id = $(this).closest('tr').find('.emp_id').text();
        fetchForUpdate(emp_id);

        // drop down menu
        $('.dept_drop_edit').html("");
        $.each(depts, function (key, dept) { 
            console.log(dept.dname)
            $('.dept_drop_edit').append('<a class="dropdown-item" href="#" id='+ dept.deptid +'>'+ dept.dname+'</a>');
        });
    });

    $(document).on('click', '.emp-edit', function () {
        updateEmployee();
    });

    $(document).on('click', '.delete-btn', function () {
        var details = {
            'id' : $(this).closest('tr').find('.emp_id').text(),
            'fname' : $(this).closest('tr').find('.emp_fname').text(),
            'lname' : $(this).closest('tr').find('.emp_lname').text(),
            'email' : $(this).closest('tr').find('.emp_email').text(),
            'dept' : $(this).closest('tr').find('.emp_dept').text(),
            'mobile': $(this).closest('tr').find('.emp_mobile').text()
        };
        confirmModal(details);
    });

    $(document).on('click', '.confirm-delete', function () {
        deleteEmployee();
    });
});
