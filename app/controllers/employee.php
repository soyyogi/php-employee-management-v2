<?php

Class Employee extends Controller 
{
	public function index()
	{
        $model = $this->loadModel('EmployeeModel');
        $data = $model->getallemployees();

        $this->view('dashboard', $data);
	}

    public function id($id)
    {
        $model = $this->loadModel('EmployeeModel');
        $data = $model->getemployee($id);
        
        $this->view('employee', $data);
    }
}