<?php

class Success_controller extends MY_Controller{

	function __construct(){
		parent::__construct('fragments_public/master_layout');
	}

	public function index(){
		return $this->load->view($this->layout, ['header_css' => 'fragments_public/css/free', 'content' => 'fragments_public/pages/success', 'footer_js' => 'fragments_public/js/free']);
	}
}