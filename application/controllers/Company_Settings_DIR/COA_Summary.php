<?php

class COA_Summary extends MY_Controller{

	function __construct(){
		parent::__construct('master_layout');		
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
	}

	public function get_coa_category_summary(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/companysettings/chart_of_accounts_summary', 'content'=>'fragments/content/companysettings/chart_of_accounts_category_summary', 'footer_js' => 'fragments/footer_js/companysettings/chart_of_accounts_category_summary', 'back_button'=>'../chart_of_accounts', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
	}
	public function get_coa_summary(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css' => 'fragments/head_css/companysettings/chart_of_accounts_summary', 'content'=>'fragments/content/companysettings/chart_of_accounts_summary', 'footer_js' => 'fragments/footer_js/companysettings/chart_of_accounts_summary', 'back_button'=>'../chart_of_accounts', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
	}

	public function get_coa_category_summary_list(){
		echo json_encode(['data' => Co_COA_Model::get_coa_category_summary_list($this->session->userdata('user'))]);
	}

	public function get_coa_summary_list(){
		echo json_encode(['data' => Co_COA_Model::get_coa_summary_list($this->session->userdata('user'))]);
	}
}
?>