<?php

Class Employee extends Controller 
{
	public function index()
	{
        require CORE . 'session.php';
        $model = $this->loadModel('EmployeeModel');
        $data = $model->getallemployees();

        $this->view('dashboard', $data);
	}

    public function id($id)
    {
        require CORE . 'session.php';
        $model = $this->loadModel('EmployeeModel');
        $data = $model->getemployee($id);
        
        $this->view('employee', $data);
    }

    public function add()
    {
        require CORE . 'session.php';
        
        $this->view('employee');
    }

    public function save()
    {
        require CORE . 'session.php';
        
        $model = $this->loadModel('EmployeeModel');
        $model->saveemployee($_POST);

        header("Location: http://localhost/php-employee-management-v2/employee");
    }
}