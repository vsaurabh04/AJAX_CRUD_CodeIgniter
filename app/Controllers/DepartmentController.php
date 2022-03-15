<?php

namespace App\Controllers;
use App\Models\Department;

class DepartmentController extends BaseController
{
    public function index(){
        echo "In the index of Department Controller";
    }
    public function create_department(){
        $department = new Department;
        $data = [
            'deptid' => $this->request->getPost('deptid'),
            'dname' => $this->request->getPost('dname'),
            'dhead' => $this->request->getPost('dhead')
        ];
        $department->insert($data);
        $res = ['status'=>'Department Added Successfully'];
        return $this->response->setJSON($res);
    }
}