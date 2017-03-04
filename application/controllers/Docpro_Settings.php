<?php
class Docpro_Settings extends MY_Controller{
    function __construct(){
        parent::__construct('master_layout');
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get_docpro_settings(){
        $this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/docpro_settings', 'content'=>'fragments/content/docpro_settings', 'back_button'=>'../home', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'company_count'=>Company_Branches_Model::company_count(), 'users_count'=>Users_Model::users_count(), 'documents_count'=>Documents_Model::documents_count(), 'mop_count'=>Modes_Of_Payment_Model::mop_count(), 'coa_setting_count'=>COA_Model::coa_setting_count(), 'bank_count'=>Banks_Model::bank_count(), 'journal_count'=>Journals_Model::journal_count(), 'user'=>$this->session->userdata('user'), 'title' => 'DocpPro Settings']);
    }	
    public function get_users(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/users', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/users', 'footer_js'=>'fragments/footer_js/docprosettings/users', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'company_branches'=>Company_Branches_Model::get($this->session->userdata('user')->cb_id), 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'title' => 'Users']);
    }	
    public function get_company(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/company', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/company', 'footer_js'=>'fragments/footer_js/docprosettings/company', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'bpc_class'=>Business_Partners_Class_Model::get(), 'bpt_type'=>Business_Partners_Type_Model::get(), 'tt_name'=>Tax_Types_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'title' => 'Companies']);
    }	
    public function get_transactions(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/transactions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/transactions', 'footer_js'=>'fragments/footer_js/docprosettings/transactions', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'title' => 'Transactions']);
    }	
    public function get_documents(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/documents', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/documents', 'footer_js'=>'fragments/footer_js/docprosettings/documents', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'j_name'=>Journals_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'title' => 'Documents']);
    }	
    public function get_modes_of_payment(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/modes_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/modes_of_payment', 'footer_js'=>'fragments/footer_js/docprosettings/modes_of_payment', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'top_type'=>Types_Of_Payment_model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'title' => 'Modes of Payment']);
    }	
    public function get_taxes(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/taxes', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/taxes', 'footer_js'=>'fragments/footer_js/docprosettings/taxes', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'tt_type'=>Tax_Types_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'title' => 'Taxes']);
    }	
    public function get_chart_of_accounts(){
        $seq_active = $this->session->flashdata('settings_coa_seq_active') ? $this->session->flashdata('settings_coa_seq_active') : '1';
        $acc_elements = COA_Model::acc_elements_get();
        $acc_classification = COA_Model::acc_classification_get();
        $line_items = COA_Model::line_items_get();
        $acc_sub = COA_Model::acc_sub_get();
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/chart_of_accounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/chart_of_accounts', 'footer_js'=>'fragments/footer_js/docprosettings/chart_of_accounts', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'acc_elements' => $acc_elements, 'acc_classification' => $acc_classification, 'line_items' => $line_items, 'acc_sub' => $acc_sub, 'user'=>$this->session->userdata('user'), 'title' => 'Chart of Accounts']);
    }	
    public function get_banks(){
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/banks', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/banks', 'footer_js'=>'fragments/footer_js/docprosettings/banks', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'title' => 'Banks']);
    }
    public function get_journals(){
         $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
         $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/journals', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/journals', 'footer_js'=>'fragments/footer_js/docprosettings/journals', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'seq_active' => $seq_active, 'user'=>$this->session->userdata('user'), 'title' => 'Journals']);
    }
    public function get_types_of_payment(){
       $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/types_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/types_of_payment', 'footer_js'=>'fragments/footer_js/docprosettings/types_of_payment', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'title' => 'Types of Payment']);
    }
    public function get_tax_types(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/docprosettings/tax_types', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/docprosettings/tax_types', 'footer_js'=>'fragments/footer_js/docprosettings/tax_types', 'back_button'=>'../docpro_settings', 'active_nav'=>'docprosettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'title' => 'Taxes']);
    }
}