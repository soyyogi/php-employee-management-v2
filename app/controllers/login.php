<?php

Class Login extends Controller 
{
	function index()
	{
		$this->view('login');
	}

	function auth()
	{	
		$model = $this->loadModel('LoginModel');
        $data = $model->getadmin();
		show($data);
		show($_POST);
		$isMatch = password_verify($_POST['password'], $data->password);
		$isMatch ? 
			header('location: http://localhost/php-employee-management-v2/employee/getallemployees')
			:
			header('location: http://localhost/php-employee-management-v2/');
	}
}