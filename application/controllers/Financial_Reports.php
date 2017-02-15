<?php

class Financial_Reports extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_financial_reports(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/financial_reports', 'content'=>'fragments/content/financial_reports', 'back_button'=>'../home', 'active_nav'=>'4', 'user'=>$this->session->userdata('user'), 'title' => 'Financial Reports']);
	}

	public function get_trial_balance(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/financialreports/trial_balance', 'content'=>'fragments/content/financialreports/trial_balance', 'footer_js'=>'fragments/footer_js/financialreports/trial_balance', 'back_button'=>'../financial_reports', 'active_nav'=>'financialreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_balance_sheet(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/financialreports/balance_sheet', 'content'=>'fragments/content/financialreports/balance_sheet', 'back_button'=>'../financial_reports', 'active_nav'=>'financialreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_cash_flow_statement(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/financialreports/cash_flow_statement', 'content'=>'fragments/content/financialreports/cash_flow_statement', 'back_button'=>'../financial_reports', 'active_nav'=>'financialreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_equity_statement(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/financialreports/equity_statement', 'content'=>'fragments/content/financialreports/equity_statement', 'back_button'=>'../financial_reports', 'active_nav'=>'financialreports', 'user'=>$this->session->userdata('user')]);
	}

	public function get_income_statement(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/financialreports/income_statement', 'content'=>'fragments/content/financialreports/income_statement', 'back_button'=>'../financial_reports', 'active_nav'=>'financialreports', 'user'=>$this->session->userdata('user')]);
	}
}