<?php

class General_Ledger extends MY_Controller{
	function __construct(){
		parent::__construct("master_layout");
	}
	public function get_general_ledger(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/bookofaccounts/general_ledger', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/bookofaccounts/general_ledger', 'footer_js'=>'fragments/footer_js/bookofaccounts/general_ledger', 'back_button'=>'../home', 'active_nav'=>'home']);
	}

}