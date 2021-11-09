<?php
	//Model: Faz requisilções no banco de dados e validações


	class Model{
		public $string;

		public function __construct(){
			$this->string = "Olá Mundo..";			
		}
		public function get_string(){
			return $this->string;
		}
	}

