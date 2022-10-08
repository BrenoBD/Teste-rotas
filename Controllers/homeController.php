<?php
	namespace Controllers;

	class homeController
	{
		public function index(){
			\Views\mainview::render('home');
		}
	}
?>