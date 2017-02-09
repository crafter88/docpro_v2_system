<?php

class Journals extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Journals_Model::get('1')]);
	}
}