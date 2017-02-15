<?php

class Home extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
		if(!($this->session->userdata('logged_in'))) redirect('login');
	}
	
	public function get_home(){
		return $this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/home_top_navbar', 'head_css'=>'fragments/head_css/home', 'content'=>'fragments/content/home', 'active_nav'=>'1', 'user'=>$this->session->userdata('user'), 'title' => 'Dashboard']);
	}
	
	public function get_memo_slider(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/home/home_sliders', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/home/memo_slider', 'footer_js'=>'fragments/footer_js/home/home_sliders', 'back_button'=>'../home', 'active_nav'=>'home']);
	}
	
	public function get_geocompanies_slider(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/home/home_sliders', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/home/geocompanies_slider', 'footer_js'=>'fragments/footer_js/home/home_sliders', 'back_button'=>'../home', 'active_nav'=>'home']);
	}
	
	public function get_linechart_slider(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/home/home_sliders', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/home/linechart_slider', 'footer_js'=>'fragments/footer_js/home/home_sliders', 'back_button'=>'../home', 'active_nav'=>'home']);
	}
	
	public function get_barchart_slider(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/home/home_sliders', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/home/barchart_slider', 'footer_js'=>'fragments/footer_js/home/home_sliders', 'back_button'=>'../home', 'active_nav'=>'home']);
	}
	
	public function get_piechart_slider(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/home/home_sliders', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/home/piechart_slider', 'footer_js'=>'fragments/footer_js/home/home_sliders', 'back_button'=>'../home', 'active_nav'=>'home']);
	}
	
}