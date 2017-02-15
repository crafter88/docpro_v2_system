<?php

class Book_Of_Accounts extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_book_of_accounts(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/book_of_accounts', 'content'=>'fragments/content/book_of_accounts', 'back_button'=>'../home', 'active_nav'=>'6', 'user'=>$this->session->userdata('user'), 'title' => 'Book of Accounts']);
	}
}