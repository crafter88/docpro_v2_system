<?php

class Collections extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_collections(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/collections', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/collections', 'footer_js'=>'fragments/footer_js/bookofaccounts/collections', 'back_button'=>'../book_of_accounts', 'active_nav'=>'bookofaccounts', 'user'=>$this->session->userdata('user')]);
	}

}