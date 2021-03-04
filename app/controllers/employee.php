<?php

Class Employee extends Controller 
{
	public function index()
	{
 	 	
 	 	// here goes logic

		$this->view('dashboard');
	}

    public function getallemployees()
    {
        $model = $this->loadModel('EmployeeModel');
        $data = $model->getallemployees();

        $this->view('dashboard', $data);
    }

    public function getemployee(array ...$query)
    {
        
        $model = $this->loadModel('EmployeeModel');
        $data = $model->getemployee($_GET);

        $this->view('dashboard', $data);
    }
}