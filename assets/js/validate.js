function validateEmployee(data){
    error = null;
    if (!data.fname.match('^[a-zA-Z]{1,50}$') ) {
       error = "Enter valid first name.";
    }
    else if (!data.lname.match('^[a-zA-Z]{0,50}$')){
        error = "Enter valid second name.";
    }
    else if (!data.email.match('[a-z0-9]+@[a-z]+\.[a-z]{2,6}')){
        error = "Enter valid email.";
    }
    else if (!data.mobile.match('^[0-9]{10}$')){
        error = "Enter valid 10 digit mobile number.";
    }
    else if (!data.dept){
        error = "Choose a Department";
    }
    return error;
}


function validateDepartment(data){
    error = null;
    console.log(data);
    if (!data.deptid.match('^[a-zA-Z]{2}$') ) {
       error = "Department ID should be character string of length 2";
    }
    else if (!data.dname.match('^[a-zA-Z_]+( [a-zA-Z_]+)*$')){
        error = "Enter valid department name.";
    }
    else if (!data.dhead.match('^[a-zA-Z_]+( [a-zA-Z_]+)*$')){
        error = "Enter valid department head name.";
    }
    return error;
}