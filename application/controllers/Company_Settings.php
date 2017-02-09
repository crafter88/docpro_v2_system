<?php

class Company_Settings extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
                
	}
	
	public function get_company_settings(){
		$this->load->view($this->layout, ['top_navbar'=>'fragments/top_navbar/global_top_navbar', 'head_css'=>'fragments/head_css/company_settings', 'content'=>'fragments/content/company_settings', 'back_button'=>'../home', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'branch_count'=>CB_Br_Model::branch_count($this->session->userdata('user')), 'user_count'=>Co_Users_Model::user_count($this->session->userdata('user')), 'journal_count'=>Co_Journals_Model::journal_count($this->session->userdata('user')), 'document_count'=>Co_Documents_Model::document_count($this->session->userdata('user')), 'mop_count'=>Co_Modes_Of_Payment_Model::mop_count($this->session->userdata('user')), 'tax_type_count'=>Co_Tax_Types_Model::tax_type_count($this->session->userdata('user')), 'business_partner_count'=>Co_Business_Partners_Model::business_partner_count($this->session->userdata('user')), 'department_count'=>Co_Departments_Model::department_count($this->session->userdata('user')), 'pcc_count'=>Co_Profit_Cost_Centers_Model::pcc_count($this->session->userdata('user')), 'product_count'=>Co_Products_Model::product_count($this->session->userdata('user')), 'service_count'=>Co_Services_Model::service_count($this->session->userdata('user')), 'discount_count'=>Co_Discounts_Model::discount_count($this->session->userdata('user')), 'coa_count'=>Co_COA_Model::coa_count($this->session->userdata('user')), 'bank_count'=>Co_Banks_Model::bank_count($this->session->userdata('user')), 'other_count'=>Co_Others_Model::other_count($this->session->userdata('user')), 'user'=>$this->session->userdata('user')]);
	}
      
	public function get_branches(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/branches', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/branches', 'footer_js'=>'fragments/footer_js/companysettings/branches', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_users(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/users', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/users', 'footer_js'=>'fragments/footer_js/companysettings/users', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
    public function get_journals(){
    	$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/journals', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/journals', 'footer_js'=>'fragments/footer_js/companysettings/journals', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
   
	public function get_transactions(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/transactions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/transactions', 'footer_js'=>'fragments/footer_js/companysettings/transactions', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_documents(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/documents', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/documents', 'footer_js'=>'fragments/footer_js/companysettings/documents', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'j_name'=>  Co_Journals_Model::get($this->session->userdata('user')), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_modes_of_payment(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/modes_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/modes_of_payment', 'footer_js'=>'fragments/footer_js/companysettings/modes_of_payment', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'payment_type'=>Types_Of_Payment_model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_taxes(){
		$tt_id = $this->session->flashdata('tt_id') ? $this->session->flashdata('tt_id') : '0';
        $tt_name = $this->session->flashdata('tt_name') ? $this->session->flashdata('tt_name') : '';
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/taxes', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/taxes', 'footer_js'=>'fragments/footer_js/companysettings/taxes', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active, 'tt_id' => $tt_id, 'tt_name' => $tt_name]);
	}
        
	public function get_business_partners(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/business_partners', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/business_partners', 'footer_js'=>'fragments/footer_js/companysettings/business_partners', 'back_button'=>'../company_settings', 'active_nav'=>'company_settings', 'bpt_type'=>Business_Partners_Type_Model::get(), 'taxes'=>Co_Taxes_Model::get($this->session->userdata('user')), 'bpc_class'=>Business_Partners_Class_Model::get(), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_departments(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/departments', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/departments', 'footer_js'=>'fragments/footer_js/companysettings/departments', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_profit_cost_centers(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/profit_cost_centers', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/profit_cost_centers', 'footer_js'=>'fragments/footer_js/companysettings/profit_cost_centers', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'co_department'=>Co_Departments_Model::get($this->session->userdata('user')), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_products(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/products', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/products', 'footer_js'=>'fragments/footer_js/companysettings/products', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'co_profit_cost_center'=>Co_Profit_Cost_Centers_Model::get($this->session->userdata('user')), 'co_department'=>Co_Departments_Model::get($this->session->userdata('user')), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_services(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/services', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/services', 'footer_js'=>'fragments/footer_js/companysettings/services', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'co_profit_cost_center'=>Co_Profit_Cost_Centers_Model::get($this->session->userdata('user')), 'co_department'=>Co_Departments_Model::get($this->session->userdata('user')), 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
        
	public function get_discounts(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/discounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/discounts', 'footer_js'=>'fragments/footer_js/companysettings/discounts', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}

	public function get_chart_of_accounts(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
        $acc_elements = Co_COA_Model::acc_elements_get($this->session->userdata('user'));
        $acc_classification = Co_COA_Model::acc_classification_get($this->session->userdata('user'));
        $line_items = Co_COA_Model::line_items_get($this->session->userdata('user'));
        $acc_sub = Co_COA_Model::acc_sub_get($this->session->userdata('user'));
        $lvl_5 = Co_COA_Model::lvl_5_get($this->session->userdata('user'));
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/chart_of_accounts', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/chart_of_accounts', 'footer_js'=>'fragments/footer_js/companysettings/chart_of_accounts', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active, 'acc_elements' => $acc_elements, 'acc_classification' => $acc_classification, 'line_items' => $line_items, 'acc_sub' => $acc_sub, 'lvl_5' => $lvl_5,
            'lvl_1_id' => $this->session->flashdata('lvl_1_id'),
            'lvl_2_id' => $this->session->flashdata('lvl_2_id'),
            'lvl_3_id' => $this->session->flashdata('lvl_3_id'),
            'lvl_4_id' => $this->session->flashdata('lvl_4_id'),
            'lvl_1_code' => $this->session->flashdata('lvl_1_code'),
            'lvl_2_code' => $this->session->flashdata('lvl_2_code'),
            'lvl_3_code' => $this->session->flashdata('lvl_3_code'),
            'lvl_4_code' => $this->session->flashdata('lvl_4_code'),
            'lvl_1_name' => $this->session->flashdata('lvl_1_name'),
            'lvl_2_name' => $this->session->flashdata('lvl_2_name'),
            'lvl_3_name' => $this->session->flashdata('lvl_3_name'),
            'lvl_4_name' => $this->session->flashdata('lvl_4_name')
        ]);
	}
        
	public function get_banks(){
		$b_id = $this->session->flashdata('b_id') ? $this->session->flashdata('b_id') : '0';
        $b_name = $this->session->flashdata('b_name') ? $this->session->flashdata('b_name') : '';
        $b_code = $this->session->flashdata('b_code') ? $this->session->flashdata('b_code') : '';
        $seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/banks', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/banks', 'footer_js'=>'fragments/footer_js/companysettings/banks', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active, 'b_id' => $b_id, 'b_name' => $b_name, 'b_code' => $b_code]);
	}
        
	public function get_others(){
		$seq_active = $this->session->flashdata('seq_active') ? $this->session->flashdata('seq_active') : '1';
		$this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/others', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/others', 'footer_js'=>'fragments/footer_js/companysettings/others', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user'), 'seq_active' => $seq_active]);
	}
    public function get_types_of_payment(){
       $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/types_of_payment', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/types_of_payment', 'footer_js'=>'fragments/footer_js/companysettings/types_of_payment', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }
    public function get_tax_types(){
        $this->load->view($this->layout, ['head_css'=>'fragments/head_css/companysettings/tax_types', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/companysettings/tax_types', 'footer_js'=>'fragments/footer_js/companysettings/tax_types', 'back_button'=>'../company_settings', 'active_nav'=>'companysettings', 'sess_data'=>$this->session->userdata('logged_in'), 'user'=>$this->session->userdata('user')]);
    }
}