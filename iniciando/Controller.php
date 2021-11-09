<?php

	require "View.php";
	require "Model.php";

	class Controller{
		public function index(){
			$model = new Model();
			$view = new View();
			$string = $model->get_string();
			$view->render($string);
		}
	}	