$(document).ready(function () {
    
    loadEmployee();

    $(document).on('click', '.emp-save', function () {
        createEmployee();
    });

    $(document).on('click', '.dept-save', function () {
        createDepartment();
    });

    $(document).on('click', '.view-btn', function () {
        var emp_id = $(this).closest('tr').find('.emp_id').text();
        viewEmployee(emp_id);
    });

    $(document).on('click', '.edit-btn', function () {
        var emp_id = $(this).closest('tr').find('.emp_id').text();
        fetchForUpdate(emp_id);
    });

    $(document).on('click', '.emp-edit', function () {
        updateEmployee();
    });

    $(document).on('click', '.delete-btn', function () {
        var emp_id = $(this).closest('tr').find('.emp_id').text();
        deleteEmployee(emp_id);
    });
});
