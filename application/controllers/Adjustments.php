<?php

class Adjustments extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_adjustments(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/adjustments', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/adjustments', 'footer_js'=>'fragments/footer_js/bookofaccounts/adjustments', 'back_button'=>'../home', 'active_nav'=>'home']);
	}

}