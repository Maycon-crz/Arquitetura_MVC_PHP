<?php
	// Renderiza os dados retornados do controler se a requisição vinda do usuario
	// necessitar de uma validação, busca no banco de dados 
	// ou 
	// Apenas renderiza o Javascript HTML requisitados pelo controller caso o usuario não tenha clicado em uma função que usa validação ou interação com banco de dados.


	class View{
		public function render($string){
			echo $string;
		}
	}	