<?php

namespace App\Controllers;
use App\Models\Employee;

class EmployeeController extends BaseController
{
    public function __construct()
    {
        $this->db = db_connect();
    }
    public function index()
    {
        return view('Index');
    }

    public function create()
    {
        $employee = new Employee;
        $data = [
           'fname' => $this->request->getPost('fname'),
           'lname' => $this->request->getPost('lname'),
           'dept' => $this->request->getPost('dept'),
           'email' => $this->request->getPost('email'),
           'mobile' => $this->request->getPost('mobile')
        ];
        $employee->save($data);
        $res = ['status'=>'Inserted Successfully'];
        return $this->response->setJSON($res);
    }

    public function read(){
        $sql1 = 'SELECT e.id, e.fname, e.lname, e.dept, e.email, e.mobile, d.dname, d.dhead FROM employee e LEFT JOIN department d ON e.dept = d.deptid ORDER BY e.id DESC';
        $query1 = $this->db->query($sql1);

        $sql2 = 'SELECT deptid, dname from department';
        $query2 = $this->db->query($sql2);

        $data['joinedData'] = $query1->getResult();
        $data['depts'] = $query2->getResult();

        return $this->response->setJSON($data);
    }

    public function view_employee(){
        $employee = new Employee;
        $emp_id = $this->request->getPost('emp_id');
        $data['employee'] = $employee->find($emp_id);
        return $this->response->setJSON($data);
    }

    public function edit_employee(){
        $employee = new Employee;
        $emp_id = $this->request->getPost('emp_id');
        $data['employee'] = $employee->find($emp_id);
        return $this->response->setJSON($data);
    }

    public function update_employee(){
        $employee = new Employee;
        $emp_id = $this->request->getPost('id');
        $data = [
           'fname' => $this->request->getPost('fname'),
           'lname' => $this->request->getPost('lname'),
           'dept' => $this->request->getPost('dept'),
           'email' => $this->request->getPost('email'),
           'mobile' => $this->request->getPost('mobile')
        ];
        $employee->update($emp_id, $data);
        $res = ['status'=>'Updated Successfully'];
        return $this->response->setJSON($res);
    }

    public function delete_employee(){
        $employee = new Employee;
        $emp_id = $this->request->getPost('emp_id');
        $employee->delete($emp_id);
        $res = ['status'=>'Deleted Successfully'];
        return $this->response->setJSON($res);
    }
}
