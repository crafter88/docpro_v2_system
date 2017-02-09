<?php

class Company_Reports extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_company_reports(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/company_reports', 'content'=>'fragments/content/company_reports', 'back_button'=>'../home', 'active_nav'=>'companyreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_statement_of_accounts(){
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companyreports/soa', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companyreports/statement_of_accounts', 'back_button'=>'../company_reports', 'active_nav'=>'companyreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_bank_statements(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companyreports/bank_statements', 'back_button'=>'../company_reports', 'active_nav'=>'companyreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_company_documents(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companyreports/company_documents', 'back_button'=>'../company_reports', 'active_nav'=>'companyreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_fixed_assets(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companyreports/fixed_assets', 'back_button'=>'../company_reports', 'active_nav'=>'companyreports', 'user'=>$this->session->userdata('user')]);
	}
}