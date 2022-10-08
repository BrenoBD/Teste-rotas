<?php 

	namespace Views;

	class mainView
	{

		public static function render($file){
			include('pages/'.$file.'.php');
		}
	}
?>