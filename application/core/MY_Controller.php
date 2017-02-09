<?php

class MY_Controller extends CI_Controller{
	
	public $layout;
	
	function __construct($layout){
		parent::__construct();
		$this->layout = $layout;
	}
}