<?php

class Routing {
	
	private $page;
	private $subpage;
	private $con;
	
	function __construct() {
		(isset($_GET['page'])) ? $this->page = $_GET['page'] : $this->page = 'home';
		(isset($_GET['subpage'])) ? $this->subpage = $_GET['subpage'] : $this->subpage = NULL;
		$this->con = db::connect();
	}
	
	function url() {
		if(isset($this->page))
			$sql = $this->con->query("SELECT mvc FROM menu WHERE link='$this->page'");

			$get = $sql->fetch_object();

			include 'include/app/model/'.$get->mvc.'.php';
			include 'include/app/controller/'.$get->mvc.'.php';
			include 'include/app/view/'.$get->mvc.'.php';
	}
}

$routing = new Routing();

$routing->url();