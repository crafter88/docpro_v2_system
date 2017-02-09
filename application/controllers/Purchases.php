<?php

class Purchases extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_purchases(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/purchases', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/purchases', 'footer_js'=>'fragments/footer_js/bookofaccounts/purchases', 'back_button'=>'../home', 'active_nav'=>'home']);
	}

}