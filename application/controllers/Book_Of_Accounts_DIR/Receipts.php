<?php

class Receipts extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_receipts(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/receipts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/receipts', 'footer_js'=>'fragments/footer_js/bookofaccounts/receipts', 'back_button'=>'../book_of_accounts', 'active_nav'=>'bookofaccounts', 'user'=>$this->session->userdata('user')]);
	}

}