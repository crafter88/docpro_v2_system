<?php

class COA extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

// ACCOUNT ELEMENTS
	public function acc_elements_get(){
		echo json_encode(['data' => COA_Model::acc_elements_get()]);
	}
	public function acc_elements_add(){
		$data = [
				'lvl_1_name' => $this->input->post('acc-elements-add-name'),
				'lvl_1_company' => 'docpro',
				'lvl_1_setup_company' => 'docpro'
			];
		COA_Model::acc_elements_add($data, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_elements_edit(){
		$data = [
					'lvl_1_code' => $this->input->post('acc-elements-edit-code'),
					'lvl_1_name' => $this->input->post('acc-elements-edit-name'),
				];
		$id = $this->input->post('acc-elements-edit-id');
		COA_Model::acc_elements_edit($data, $id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_elements_delete(){
		COA_Model::acc_elements_delete($this->input->post('acc-elements-delete-id'));
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
		redirect('docpro_setup/chart_of_accounts');
	}

// ACCOUNT CLASSIFICATION
	public function acc_classification_get(){
		echo json_encode(['data' => COA_Model::acc_classification_get()]);
	}
	public function acc_classification_add(){
		$data = [
					'lvl_2_name' => $this->input->post('acc-classification-add-name'),
					'lvl_2_company' => 'docpro',
					'lvl_2_setup_company' => 'docpro'
				];
		$lvl_1_id = $this->input->post('acc-classification-add-elements');
		COA_Model::acc_classification_add($data, $lvl_1_id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_classification_edit(){
		$data = [
				'lvl_2_code' => $this->input->post('acc-classification-edit-code'),
				'lvl_2_name' => $this->input->post('acc-classification-edit-name')
			];
		$lvl_1_id = $this->input->post('acc-classification-edit-elements');
		$lvl_2_id = $this->input->post('acc-classification-edit-id');
		COA_Model::acc_classification_edit($data, $lvl_1_id, $lvl_2_id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_classification_delete(){
		$id = $this->input->post('acc-classification-delete-id');
		COA_Model::acc_classification_delete($id);
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
		redirect('docpro_setup/chart_of_accounts');
	}

// LINE ITEMS
	public function line_items_get(){
		echo json_encode(['data' => COA_Model::line_items_get()]);
	}
	public function line_items_add(){
		$data = [
				'lvl_3_name' => $this->input->post('line-items-add-name'),
				'lvl_3_company' => 'docpro',
				'lvl_3_setup_company' => 'docpro',
			];
		$lvl_2_id = $this->input->post('line-items-add-classification');
		COA_Model::line_items_add($data, $lvl_2_id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function line_items_edit(){
		$data = [
				'lvl_3_code' => $this->input->post('line-items-edit-code'),
				'lvl_3_name' => $this->input->post('line-items-edit-name')
			];
		$lvl_2_id = $this->input->post('line-items-edit-classification');
		$lvl_3_id = $this->input->post('line-items-edit-id');
		COA_Model::line_items_edit($data, $lvl_2_id, $lvl_3_id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function line_items_delete(){
		$id = $this->input->post('line-items-delete-id');
		COA_Model::line_items_delete($id);
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
		redirect('docpro_setup/chart_of_accounts');
	}

// ACCOUNT SUBCLASSIFICATION
	public function acc_sub_get(){
		echo json_encode(['data' => COA_Model::acc_sub_get()]);
	}
	public function acc_sub_add(){
		$data = [
					'lvl_4_code' => $this->input->post('acc-sub-add-code'),
					'lvl_4_name' => $this->input->post('acc-sub-add-name'),
					'bir' => $this->input->post('bir'),
					'lvl_4_company' => 'docpro',
					'lvl_4_setup_company' => 'docpro'
				];
		$lvl_3_id = $this->input->post('acc-sub-add-line-item');
		COA_Model::acc_sub_add($data, $lvl_3_id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_sub_edit(){
		$data = [
					'lvl_4_code' => $this->input->post('acc-sub-edit-code'),
					'lvl_4_name' => $this->input->post('acc-sub-edit-name'),
					'bir' => $this->input->post('bir')
				];
		$lvl_3_id = $this->input->post('acc-sub-edit-line-item');
		$lvl_4_id = $this->input->post('acc-sub-edit-id');
		COA_Model::acc_sub_edit($data, $lvl_3_id, $lvl_4_id, $this->session->userdata('user'));
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
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_sub_delete(){
		$id = $this->input->post('acc-sub-delete-id');
		COA_Model::acc_sub_delete($id);
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
		redirect('docpro_setup/chart_of_accounts');
	}


// RELOAD TABLES
	public function reload_lvl_2($slug){
		echo json_encode(['data' => COA_Model::reload_lvl_2($slug)]);
	}
	public function reload_lvl_3($slug){
		echo json_encode(['data' => COA_Model::reload_lvl_3($slug)]);
	}
	public function reload_lvl_4($slug){
		echo json_encode(['data' => COA_Model::reload_lvl_4($slug)]);
	}

}

