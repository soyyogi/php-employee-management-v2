<?php 

Class Controller
{

	protected function view($view,$data = [])
	{
		if(file_exists(VIEWS . $view . '.php'))
 		{
 			include VIEWS . $view . '.php';
 		}else{
 			include VIEWS . '404.php';
 		}
	}

	protected function loadModel($model)
	{
		if(file_exists(MODELS . $model . '.php'))
 		{
 			include MODELS . $model . '.php';
 			return $model = new $model();
 		}

 		return false;
	}


}