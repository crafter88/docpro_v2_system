<?php

class Tables extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_tables(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/tables', 'content'=>'fragments/content/tables', 'back_button'=>'../home', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_value_added_tax(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/value_added_tax', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_withholding_tax(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/withholding_tax', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_accumulator(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/accumulator', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_financial_statements(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/financial_statements', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_trial_balance(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/trial_balance', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_general_ledger(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/general_ledger', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
	
	public function get_subsidiary_ledger(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/tables/subsidiary_ledger', 'back_button'=>'../tables', 'active_nav'=>'tables', 'user'=>$this->session->userdata('user')]);
	}
}