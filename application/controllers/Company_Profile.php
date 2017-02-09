<?php

class Company_Profile extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct('master_layout');
	}

	public function index(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/company_profile', 'content'=>'fragments/content/company_profile', 'footer_js'=>'fragments/footer_js/company_profile', 'back_button'=>'../home', 'active_nav'=>'home', 'user'=>$this->session->userdata('user')]);
	}
}

