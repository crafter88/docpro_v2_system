<?php

class Landing_Page extends MY_Controller
{
	function __construct()
	{
		parent::__construct('fragments_public/master_layout');
	}

	public function index()
	{
		$this->load->view($this->layout, ['content' => 'fragments_public/pages/home', 'footer_js' => 'fragments_public/js/home_js']);
	}
	public function system()
	{
		$this->load->view($this->layout, ['content' => 'fragments_public/pages/system', 'footer_js' => 'fragments_public/js/system_js']);
	}
	public function about()
	{
		$this->load->view($this->layout, ['content' => 'fragments_public/pages/about', 'footer_js' => 'fragments_public/js/about_js']);
	}
	public function contact()
	{
		$this->load->view($this->layout, ['content' => 'fragments_public/pages/contact', 'footer_js' => 'fragments_public/js/contact_js']);
	}
	public function subscribe()
	{
		$this->load->view($this->layout, ['content' => 'fragments_public/pages/subscribe', 'footer_js' => 'fragments_public/js/subscribe_js']);
	}
	public function login()
	{
		$this->load->view($this->layout, ['content' => 'fragments_public/pages/login', 'footer_js' => 'fragments_public/js/login_js', 'auth_msg' => $this->session->flashdata('auth_msg')]);
	}
}