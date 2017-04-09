<?php

class Home_model {
	
	private $con;
	private $subpage;
	private $page;
	
	function __construct(){
		$this->con = db::connect();
		(isset($_GET['page'])) ? $this->page = $_GET['page'] : $this->page = 'home';
		(isset($_GET['subpage'])) ? $this->subpage = $_GET['subpage'] : NULL;
	}
	
	function get_menu_link(){
		$sql = $this->con->query("SELECT link, name FROM menu WHERE parent IS NULL");
			while($get = $sql->fetch_object()){
				echo '<a class="col-xs-4 button-main" href="'.$get->link.'">'.$get->name.'</a>';
			}
	}
		
	function get_home_menu(){
		$sql = $this->con->query("SELECT link, name FROM menu WHERE parent=1");
			while($get = $sql->fetch_object()){
				echo '<a class="col-xs-12 button-main" href="'.$this->page.'/'.$get->link.'">'.$get->name.'</a>';
			}
	}
	
	function get_content() {
		if(!isset($this->subpage)){
			if(file_exists('include/app/content/'.$this->page.'.php'))
				include 'include/app/content/'.$this->page.'.php';
			else
				file_put_contents ('include/app/content/'.$this->page.'.php', '');
		}
		else{
			if(file_exists('include/app/content/'.$this->page.'_'.$this->subpage.'.php'))
				include 'include/app/content/'.$this->page.'_'.$this->subpage.'.php';
			else
				file_put_contents ('include/app/content/'.$this->page.'_'.$this->subpage.'.php', '');
		}	
	}
	
	
	function get_value($what) {
		$sql = $this->con->query("SELECT $what FROM project");
		$row = $sql->fetch_object();
		echo $row->$what;
	}
}

?>