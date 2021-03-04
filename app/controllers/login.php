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
		$isMatch = password_verify($_POST['password'], $data->password);
		if($isMatch)
		{
			$_SESSION['user'] = $data->name;
			$_SESSION["login_time_stamp"] = time();
			header('location: http://localhost/php-employee-management-v2/employee');
		}
		else 
		{
			$_SESSION['loginErrorMessage'] = 'Incorrect credentials!';
			header('location: http://localhost/php-employee-management-v2/');
		}
	}
}