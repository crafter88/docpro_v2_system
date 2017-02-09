<?php

class Tax_Types extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Tax_Types_Model::get()]);
	}
}