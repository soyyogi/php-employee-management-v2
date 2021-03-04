<?php

Class Login extends Controller 
{
	function index()
	{
 	 	
 	 	// here goes login logic

		$this->view('login');
	}

	function auth()
	{	
		show($_POST);
	}
}