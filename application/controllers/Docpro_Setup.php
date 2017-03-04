<?php

class Docpro_Setup extends MY_Controller{

	function __construct(){
		parent::__construct('master_layout');
	}

	public function get_docpro_setup(){
        $this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/docpro_setup', 'content'=>'fragments/content/docpro_setup', 'back_button'=>'../home', 'active_nav'=>'docpro-setup', 'coa_count'=>COA_Model::coa_count(), 'tax_types_count'=>Tax_Types_Model::tax_types_count(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'title' => 'DocPro Setup']);
    }	
    public function get_users(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/users', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/users', 'footer_js'=>'fragments/footer_js/docprosetup/users', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'company_branches'=>Company_Branches_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }	
    public function get_company(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/company', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/company', 'footer_js'=>'fragments/footer_js/docprosetup/company', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'bpc_class'=>Business_Partners_Class_Model::get(), 'bpt_type'=>Business_Partners_Type_Model::get(), 'tt_name'=>Tax_Types_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }	
    public function get_transactions(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/transactions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/transactions', 'footer_js'=>'fragments/footer_js/docprosetup/transactions', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }	
    public function get_documents(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/documents', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/documents', 'footer_js'=>'fragments/footer_js/docprosetup/documents', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'j_name'=>Journals_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }	
    public function get_modes_of_payment(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/modes_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/modes_of_payment', 'footer_js'=>'fragments/footer_js/docprosetup/modes_of_payment', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'top_type'=>Types_Of_Payment_model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user')]);
    }	
    public function get_taxes(){
        $tt_id = $this->session->flashdata('tt_id') ? $this->session->flashdata('tt_id') : '0';
        $tt_name = $this->session->flashdata('tt_name') ? $this->session->flashdata('tt_name') : '';
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/taxes', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/taxes', 'footer_js'=>'fragments/footer_js/docprosetup/taxes', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'tt_type'=>Tax_Types_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'tt_id' => $tt_id, 'tt_name' => $tt_name, 'title' => 'Taxes']);
    }	
    public function get_chart_of_accounts(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $acc_elements = COA_Model::acc_elements_get();
        $acc_classification = COA_Model::acc_classification_get();
        $line_items = COA_Model::line_items_get();
        $acc_sub = COA_Model::acc_sub_get();
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/chart_of_accounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/chart_of_accounts', 'footer_js'=>'fragments/footer_js/docprosetup/chart_of_accounts', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'acc_elements' => $acc_elements, 'acc_classification' => $acc_classification, 'line_items' => $line_items, 'acc_sub' => $acc_sub,
            'lvl_1_id' => $this->session->flashdata('lvl_1_id'),
            'lvl_2_id' => $this->session->flashdata('lvl_2_id'),
            'lvl_3_id' => $this->session->flashdata('lvl_3_id'),
            'lvl_1_code' => $this->session->flashdata('lvl_1_code'),
            'lvl_2_code' => $this->session->flashdata('lvl_2_code'),
            'lvl_3_code' => $this->session->flashdata('lvl_3_code'),
            'lvl_1_name' => $this->session->flashdata('lvl_1_name'),
            'lvl_2_name' => $this->session->flashdata('lvl_2_name'),
            'lvl_3_name' => $this->session->flashdata('lvl_3_name'),
            'title' => 'Chart of Accounts'
        ]);
    }	
    public function get_banks(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/banks', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/banks', 'footer_js'=>'fragments/footer_js/docprosetup/banks', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }
    public function get_journals(){
         $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/journals', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/journals', 'footer_js'=>'fragments/footer_js/docprosetup/journals', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }
    public function get_types_of_payment(){
       $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/types_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/types_of_payment', 'footer_js'=>'fragments/footer_js/docprosetup/types_of_payment', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }
    public function get_tax_types(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosetup/tax_types', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosetup/tax_types', 'footer_js'=>'fragments/footer_js/docprosetup/tax_types', 'back_button'=>'../docpro_setup', 'active_nav'=>'docpro-setup', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }
}
?>