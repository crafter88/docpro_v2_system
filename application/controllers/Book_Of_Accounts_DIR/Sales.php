<?php

class Sales extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_sales(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/sales', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/sales', 'footer_js'=>'fragments/footer_js/bookofaccounts/sales', 'back_button'=>'../book_of_accounts', 'active_nav'=>'bookofaccounts', 'user'=>$this->session->userdata('user')]);
	}

}