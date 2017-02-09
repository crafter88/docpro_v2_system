<?php

class Chart_of_Accounts extends MY_Controller{

	function __construct(){
		parent::__construct('master_layout');
	}

// ACCOUNT ELEMENTS
	public function acc_elements_get(){
		echo json_encode(['data' => Co_COA_Model::acc_elements_get($this->session->userdata('user'))]);
	}
	public function acc_elements_add(){
		$data = [
				'lvl_1_name' => $this->input->post('acc-elements-add-name'),
				'lvl_1_company' => 'company',
				'lvl_1_setup_company' => 'company'
			];
		Co_COA_Model::acc_elements_add($data, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '1');
		$this->session->set_flashdata('lvl_1_id', '');
		$this->session->set_flashdata('lvl_2_id', '');
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', '');
		$this->session->set_flashdata('lvl_2_code', '');
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', '');
		$this->session->set_flashdata('lvl_2_name', '');
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function acc_elements_edit(){
		$data = [
					'lvl_1_code' => $this->input->post('acc-elements-edit-code'),
					'lvl_1_name' => $this->input->post('acc-elements-edit-name'),
				];
		$id = $this->input->post('acc-elements-edit-id');
		Co_COA_Model::acc_elements_edit($data, $id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '1');
		$this->session->set_flashdata('lvl_1_id', '');
		$this->session->set_flashdata('lvl_2_id', '');
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', '');
		$this->session->set_flashdata('lvl_2_code', '');
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', '');
		$this->session->set_flashdata('lvl_2_name', '');
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function acc_elements_delete(){
		Co_COA_Model::acc_elements_delete($this->input->post('acc-elements-delete-id'));
		$this->session->set_flashdata('seq_active', '1');
		$this->session->set_flashdata('lvl_1_id', '');
		$this->session->set_flashdata('lvl_2_id', '');
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', '');
		$this->session->set_flashdata('lvl_2_code', '');
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', '');
		$this->session->set_flashdata('lvl_2_name', '');
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}

// ACCOUNT CLASSIFICATION
	public function acc_classification_get(){
		echo json_encode(['data' => Co_COA_Model::acc_classification_get()]);
	}
	public function acc_classification_add(){
		$data = [
					'lvl_2_name' => $this->input->post('acc-classification-add-name'),
					'lvl_2_company' => 'company',
					'lvl_2_setup_company' => 'company'
				];
		$lvl_1_id = $this->input->post('acc-classification-add-elements');
		Co_COA_Model::acc_classification_add($data, $lvl_1_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '2');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', '');
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', '');
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', '');
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function acc_classification_edit(){
		$data = [
				'lvl_2_code' => $this->input->post('acc-classification-edit-code'),
				'lvl_2_name' => $this->input->post('acc-classification-edit-name')
			];
		$lvl_1_id = $this->input->post('acc-classification-edit-elements');
		$lvl_2_id = $this->input->post('acc-classification-edit-id');
		Co_COA_Model::acc_classification_edit($data, $lvl_1_id, $lvl_2_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '2');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', '');
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', '');
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', '');
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function acc_classification_delete(){
		$id = $this->input->post('acc-classification-delete-id');
		Co_COA_Model::acc_classification_delete($id);
		$this->session->set_flashdata('seq_active', '2');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', '');
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', '');
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', '');
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}

// LINE ITEMS
	public function line_items_get(){
		echo json_encode(['data' => Co_COA_Model::line_items_get($this->session->userdata('user'))]);
	}
	public function line_items_add(){
		$data = [
				'lvl_3_name' => $this->input->post('line-items-add-name'),
				'lvl_3_company' => 'company',
				'lvl_3_setup_company' => 'company',
			];
		$lvl_2_id = $this->input->post('line-items-add-classification');
		Co_COA_Model::line_items_add($data, $lvl_2_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '3');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function line_items_edit(){
		$data = [
				'lvl_3_code' => $this->input->post('line-items-edit-code'),
				'lvl_3_name' => $this->input->post('line-items-edit-name')
			];
		$lvl_2_id = $this->input->post('line-items-edit-classification');
		$lvl_3_id = $this->input->post('line-items-edit-id');
		Co_COA_Model::line_items_edit($data, $lvl_2_id, $lvl_3_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '3');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function line_items_delete(){
		$id = $this->input->post('line-items-delete-id');
		Co_COA_Model::line_items_delete($id);
		$this->session->set_flashdata('seq_active', '3');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', '');
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', '');
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', '');
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}

// ACCOUNT SUBCLASSIFICATION
	public function acc_sub_get(){
		echo json_encode(['data' => Co_COA_Model::acc_sub_get()]);
	}
	public function acc_sub_add(){
		$data = [
					'lvl_4_code' => $this->input->post('acc-sub-add-code'),
					'lvl_4_name' => $this->input->post('acc-sub-add-name'),
					'bir' => $this->input->post('bir'),
					'lvl_4_company' => 'company',
					'lvl_4_setup_company' => 'company'
				];
		$lvl_3_id = $this->input->post('acc-sub-add-line-item');
		Co_COA_Model::acc_sub_add($data, $lvl_3_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '4');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', $this->input->post('lvl_3_id'));
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', $this->input->post('lvl_3_code'));
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', $this->input->post('lvl_3_name'));
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function acc_sub_edit(){
		$data = [
					'lvl_4_code' => $this->input->post('acc-sub-edit-code'),
					'lvl_4_name' => $this->input->post('acc-sub-edit-name'),
					'bir' => $this->input->post('bir')
				];
		$lvl_3_id = $this->input->post('acc-sub-edit-line-item');
		$lvl_4_id = $this->input->post('acc-sub-edit-id');
		Co_COA_Model::acc_sub_edit($data, $lvl_3_id, $lvl_4_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '4');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', $this->input->post('lvl_3_id'));
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', $this->input->post('lvl_3_code'));
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', $this->input->post('lvl_3_name'));
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}
	public function acc_sub_delete(){
		$id = $this->input->post('acc-sub-delete-id');
		Co_COA_Model::acc_sub_delete($id);
		$this->session->set_flashdata('seq_active', '4');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', $this->input->post('lvl_3_id'));
		$this->session->set_flashdata('lvl_4_id', '');
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', $this->input->post('lvl_3_code'));
		$this->session->set_flashdata('lvl_4_code', '');
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', $this->input->post('lvl_3_name'));
		$this->session->set_flashdata('lvl_4_name', '');
		redirect('company_settings/chart_of_accounts');
	}

// LEVEL 5
	public function lvl_5_add(){
		$data = [
					'lvl_5_name' => $this->input->post('lvl-5-add-name'),
					'lvl_5_company' => 'company',
					'lvl_5_setup_company' => 'company',
				];
		$lvl_4_id = $this->input->post('lvl-5-add-acc-sub');
		Co_COA_Model::lvl_5_add($data, $lvl_4_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '5');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', $this->input->post('lvl_3_id'));
		$this->session->set_flashdata('lvl_4_id', $this->input->post('lvl_4_id'));
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', $this->input->post('lvl_3_code'));
		$this->session->set_flashdata('lvl_4_code', $this->input->post('lvl_4_code'));
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', $this->input->post('lvl_3_name'));
		$this->session->set_flashdata('lvl_4_name', $this->input->post('lvl_4_name'));
		redirect('company_settings/chart_of_accounts');
	}
	public function lvl_5_edit(){
		$data = [
					'lvl_5_code' => $this->input->post('lvl-5-edit-code'),
					'lvl_5_name' => $this->input->post('lvl-5-edit-name')
				];
		$lvl_4_id = $this->input->post('lvl-5-edit-acc-sub');
		$lvl_5_id = $this->input->post('lvl-5-edit-id');
		Co_COA_Model::lvl_5_edit($data, $lvl_4_id, $lvl_5_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '5');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', $this->input->post('lvl_3_id'));
		$this->session->set_flashdata('lvl_4_id', $this->input->post('lvl_4_id'));
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', $this->input->post('lvl_3_code'));
		$this->session->set_flashdata('lvl_4_code', $this->input->post('lvl_4_code'));
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', $this->input->post('lvl_3_name'));
		$this->session->set_flashdata('lvl_4_name', $this->input->post('lvl_4_name'));
		redirect('company_settings/chart_of_accounts');
	}
	public function lvl_5_delete(){
		$id = $this->input->post('lvl-5-delete-id');
		Co_COA_Model::lvl_5_delete($id);
		$this->session->set_flashdata('seq_active', '5');
		$this->session->set_flashdata('lvl_1_id', $this->input->post('lvl_1_id'));
		$this->session->set_flashdata('lvl_2_id', $this->input->post('lvl_2_id'));
		$this->session->set_flashdata('lvl_3_id', $this->input->post('lvl_3_id'));
		$this->session->set_flashdata('lvl_4_id', $this->input->post('lvl_4_id'));
		$this->session->set_flashdata('lvl_1_code', $this->input->post('lvl_1_code'));
		$this->session->set_flashdata('lvl_2_code', $this->input->post('lvl_2_code'));
		$this->session->set_flashdata('lvl_3_code', $this->input->post('lvl_3_code'));
		$this->session->set_flashdata('lvl_4_code', $this->input->post('lvl_4_code'));
		$this->session->set_flashdata('lvl_1_name', $this->input->post('lvl_1_name'));
		$this->session->set_flashdata('lvl_2_name', $this->input->post('lvl_2_name'));
		$this->session->set_flashdata('lvl_3_name', $this->input->post('lvl_3_name'));
		$this->session->set_flashdata('lvl_4_name', $this->input->post('lvl_4_name'));
		redirect('company_settings/chart_of_accounts');
	}

// COA
	public function coa_get_elements(){
		echo json_encode(Co_COA_Model::coa_get_elements($this->session->userdata('user')));
	}
	public function coa_get_classification($slug){
		echo json_encode(Co_COA_Model::coa_get_classification($slug));
	}
	public function coa_get_line_item($slug){
		echo json_encode(Co_COA_Model::coa_get_line_item($slug));
	}
	public function coa_get_subclassification($slug){
		echo json_encode(Co_COA_Model::coa_get_subclassification($slug));
	}
	public function coa_get_lvl5($slug){
		echo json_encode(Co_COA_Model::coa_get_lvl5($slug));
	}
	public function coa_get_lvl6($slug){
		echo json_encode(Co_COA_Model::coa_get_lvl6($slug));
	}
	public function coa_get(){
		echo json_encode(['data' => Co_COA_Model::coa_get($this->session->userdata('user'))]);
	}
	// public function coa_add(){
	// 	$data = [
	// 				'coa_code' => $this->input->post('add-code'),
	// 				'coa_name' => $this->input->post('add-name-display'),
	// 				'lvl_1_id' => $this->input->post('add-element'),
	// 				'lvl_2_id' => $this->input->post('add-classification'),
	// 				'lvl_3_id' => $this->input->post('add-line-item'),
	// 				'lvl_4_id' => $this->input->post('add-subclassification'),
	// 				'lvl_5_id' => '0',
	// 				'lvl_6_id' => '0',
	// 				'coa_company' => 'company'
	// 			];
	// 	$lvl_6 = null;
	// 	if($this->input->post('add-lvl-6-code') !== '0'){
	// 		$lvl_6 = [
	// 				'lvl_6_name' => $this->input->post('add-name-display'),
	// 				'lvl_6_company' => 'company',
	// 				'lvl_6_setup_company' => 'company'
	// 			];
	// 	}
		
	// 	$lvl_5_id = $this->input->post('add-coa-lvl-5');
	// 	Co_COA_Model::coa_add($data, $lvl_6, $lvl_5_id, $this->session->userdata('user'));
	// 	$this->session->set_flashdata('seq_active', '6');
	// 	redirect('company_settings/chart_of_accounts');
	// }
	// public function coa_edit(){
	// 	$data = [
	// 				'coa_code' => $this->input->post('edit-code'),
	// 				'coa_name' => $this->input->post('edit-name-display'),
	// 				'lvl_1_id' => $this->input->post('edit-element'),
	// 				'lvl_2_id' => $this->input->post('edit-classification'),
	// 				'lvl_3_id' => $this->input->post('edit-line-item'),
	// 				'lvl_4_id' => $this->input->post('edit-subclassification'),
	// 				'lvl_5_id' => $this->input->post('edit-coa-lvl-5'),
	// 				'coa_company' => 'company'
	// 			];
	// 	$o_lvl6_id = $this->input->post('o_lvl6_id');
	// 	$lvl_6 = null;
	// 	$lvl_6_id = null;
	// 	if($this->input->post('edit-lvl-6-code') !== '0'){
	// 		$o_lvl5_id = $this->input->post('o_lvl5_id');
	// 		$o_coa_name = $this->input->post('o_coa_name');
	// 		$lvl5_id = $this->input->post('edit-coa-lvl-5');
	// 		$coa_name = $this->input->post('edit-name-display');
	// 		if($o_lvl5_id !== $lvl5_id || $o_coa_name !== $coa_name){
	// 			$lvl_6 = [
	// 				'lvl_6_name' => $this->input->post('edit-name-display'),
	// 				'lvl_6_company' => 'company',
	// 				'lvl_6_setup_company' => 'company'
	// 			];
	// 		}else{
	// 			$lvl_6_id = $this->input->post('edit-coa-lvl-6');
	// 		}	
	// 	}
	// 	$lvl_5_id = $this->input->post('edit-coa-lvl-5');
	// 	$id = $this->input->post('edit-id');
	// 	Co_COA_Model::coa_edit($data, $lvl_6, $lvl_5_id, $lvl_6_id, $id, $o_lvl6_id, $this->session->userdata('user'));
	// 	$this->session->set_flashdata('seq_active', '6');
	// 	redirect('company_settings/chart_of_accounts');
	// }
	// public function coa_delete(){
	// 	$id = $this->input->post('delete-id');
	// 	$lvl_6_id = $this->input->post('o_lvl6_id');
	// 	Co_COA_Model::coa_delete($id, $lvl_6_id);
	// 	$this->session->set_flashdata('seq_active', '6');
	// 	redirect('company_settings/chart_of_accounts');
	// }
	public function coa_add(){
		$data = [
					'coa_code' => $this->input->post('add-code'),
					'coa_name' => $this->input->post('add-name-display'),
					'lvl_1_id' => $this->input->post('add-element'),
					'lvl_2_id' => $this->input->post('add-classification'),
					'lvl_3_id' => $this->input->post('add-line-item'),
					'lvl_4_id' => $this->input->post('add-subclassification'),
					'lvl_5_id' => '0',
					'lvl_6_id' => '0',
					'coa_company' => 'docpro'
				];
		$lvl_5 = null;
		if($this->input->post('add-lvl-5-code') !== '0'){
			$lvl_5 = [
					'lvl_5_name' => $this->input->post('add-name-display'),
					'lvl_5_company' => 'docpro',
					'lvl_5_setup_company' => 'docpro'
				];
		}
		$lvl_4_id = $this->input->post('add-subclassification');
		Co_COA_Model::coa_add($data, $lvl_5, $lvl_4_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '6');
		redirect('company_settings/chart_of_accounts');
	}
	public function coa_edit(){
		$data = [
					'coa_code' => $this->input->post('edit-code'),
					'coa_name' => $this->input->post('edit-name-display'),
					'lvl_1_id' => $this->input->post('edit-element'),
					'lvl_2_id' => $this->input->post('edit-classification'),
					'lvl_3_id' => $this->input->post('edit-line-item'),
					'lvl_4_id' => $this->input->post('edit-subclassification'),
					'lvl_5_id' => $this->input->post('edit-coa-lvl-5')
				];
		$o_lvl5_id = $this->input->post('o_lvl5_id');
		$lvl_5 = null;
		$lvl_5_id = null;
		if($this->input->post('edit-lvl-5-code') !== '0'){
			$o_lvl4_id = $this->input->post('o_lvl4_id');
			$o_coa_name = $this->input->post('o_coa_name');
			$lvl4_id = $this->input->post('edit-subclassification');
			$coa_name = $this->input->post('edit-name-display');
			if($o_lvl4_id !== $lvl4_id){
				$lvl_5 = [
					'lvl_5_name' => $this->input->post('edit-name-display'),
					'lvl_5_company' => 'docpro',
					'lvl_5_setup_company' => 'docpro'
				];
			}else{
				$lvl_5_id = $this->input->post('edit-coa-lvl-5');
			}	
		}
		$lvl_4_id = $this->input->post('edit-subclassification');
		$id = $this->input->post('edit-id');
		Co_COA_Model::coa_edit($data, $lvl_5, $lvl_4_id, $lvl_5_id, $id, $o_lvl5_id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '6');
		redirect('company_settings/chart_of_accounts');
	}
	public function coa_delete(){
		$id = $this->input->post('delete-id');
		$lvl_5_id = $this->input->post('o_lvl5_id');
		Co_COA_Model::coa_delete($id, $lvl_5_id);
		$this->session->set_flashdata('seq_active', '6');
		redirect('company_settings/chart_of_accounts');
	}

// RELOAD TABLES
	public function reload_lvl_2($slug){
		echo json_encode(['data' => Co_COA_Model::reload_lvl_2($slug)]);
	}
	public function reload_lvl_3($slug){
		echo json_encode(['data' => Co_COA_Model::reload_lvl_3($slug)]);
	}
	public function reload_lvl_4($slug){
		echo json_encode(['data' => Co_COA_Model::reload_lvl_4($slug)]);
	}
	public function reload_lvl_5($slug){
		echo json_encode(['data' => Co_COA_Model::reload_lvl_5($slug)]);
	}

	public function enable_lvl_1(){
		Co_COA_Model::enable_lvl_1($this->input->get('id'));
	}
	public function disable_lvl_1(){
		Co_COA_Model::disable_lvl_1($this->input->get('id'));
	}
	public function enable_lvl_2(){
		Co_COA_Model::enable_lvl_2($this->input->get('id'));
	}
	public function disable_lvl_2(){
		Co_COA_Model::disable_lvl_2($this->input->get('id'));
	}
	public function enable_lvl_3(){
		Co_COA_Model::enable_lvl_3($this->input->get('id'));
	}
	public function disable_lvl_3(){
		Co_COA_Model::disable_lvl_3($this->input->get('id'));
	}
	public function enable_lvl_4(){
		Co_COA_Model::enable_lvl_4($this->input->get('id'));
	}
	public function disable_lvl_4(){
		Co_COA_Model::disable_lvl_4($this->input->get('id'));
	}
	public function enable_lvl_5(){
		Co_COA_Model::enable_lvl_5($this->input->get('id'));
	}
	public function disable_lvl_5(){
		Co_COA_Model::disable_lvl_5($this->input->get('id'));
	}
}