<?php

class Home_controller extends MY_Controller{
	
	function __construct(){
		parent::__construct('fragments_public/master_layout');
	}
	
	public function index(){
		return $this->load->view($this->layout, ['active_nav' => 'home', 'content' => 'fragments_public/pages/main_page']);
	}
}

?>