<?php

class Business_Partners extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_business_partners(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/transactions/business_partners', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/transactions/business_partners', 'footer_js'=>'fragments/footer_js/transactions/business_partners', 'back_button'=>'transactions', 'active_nav'=>'transaction']);
	
	}
}