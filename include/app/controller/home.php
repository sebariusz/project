<?php

class Home_controller {
	
	private $model;
	
	function __construct() {
		$this->model = new Home_model();
	}
	
	function menu(){
		return $this->model->get_menu_link();
	}
	
	function home_menu(){
		return $this->model->get_home_menu();
	}	
	
	function load_content(){
		return $this->model->get_content();
	}
		
	function show_value($what){
		$this->model->get_value($what);
	}
	
}
$c = new Home_controller();


?>