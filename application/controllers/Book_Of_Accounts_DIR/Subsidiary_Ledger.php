<?php

class Subsidiary_Ledger extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_subsidiary_ledger(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/subsidiary_ledger', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/subsidiary_ledger', 'footer_js'=>'fragments/footer_js/bookofaccounts/subsidiary_ledger', 'back_button'=>'../book_of_accounts', 'active_nav'=>'bookofaccounts', 'user'=>$this->session->userdata('user')]);
	}

}