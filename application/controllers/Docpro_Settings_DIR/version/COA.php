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
		if($this->input->post('acc-elements-add-code') !== '' && $this->input->post('acc-elements-add-name') !== ''){
			$data = [
					'lvl_1_name' => $this->input->post('acc-elements-add-name'),
					'lvl_1_company' => 'docpro'
				];
			COA_Model::acc_elements_add($data);
		}
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_elements_edit(){
		if($this->input->post('acc-elements-edit-code') !== '' && $this->input->post('acc-elements-edit-name') !== ''){
			$data = [
					'lvl_1_code' => $this->input->post('acc-elements-edit-code'),
					'lvl_1_name' => $this->input->post('acc-elements-edit-name'),
				];
			COA_Model::acc_elements_edit($this->input->post('acc-elements-edit-id'), $data);
		}
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_elements_update(){
		if($this->input->post('acc-elements-update-code') !== '' && $this->input->post('acc-elements-update-name') !== ''){
			$data = [
					'lvl_1_code' => $this->input->post('acc-elements-update-code'),
					'lvl_1_name' => $this->input->post('acc-elements-update-name'),
					'lvl_1_company' => 'docpro'
				];
			COA_Model::acc_elements_update($this->input->post('acc-elements-update-id'), $data);
		}
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_elements_delete(){
		COA_Model::acc_elements_delete($this->input->post('acc-elements-delete-id'));
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/chart_of_accounts');
	}

// ACCOUNT CLASSIFICATION
	public function acc_classification_get(){
		echo json_encode(['data' => COA_Model::acc_classification_get()]);
	}
	public function acc_classification_add(){
		if($this->input->post('acc-classification-add-code') !== '' && $this->input->post('acc-classification-add-name') !== '' && $this->input->post('acc-classification-add-elements') !== ''){
			$data = [
					'lvl_2_name' => $this->input->post('acc-classification-add-name'),
					'lvl_2_company' => 'docpro',
					'lvl_1_id' => $this->input->post('acc-classification-add-elements')
				];
			COA_Model::acc_classification_add($data);
		}
		$this->session->set_flashdata('seq_active', '2');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_classification_edit(){
		if($this->input->post('acc-classification-edit-code') !== '' && $this->input->post('acc-classification-edit-name') !== '' && $this->input->post('acc-classification-edit-elements') !== ''){
			$data = [
					'lvl_2_code' => $this->input->post('acc-classification-edit-code'),
					'lvl_2_name' => $this->input->post('acc-classification-edit-name'),
					'lvl_1_id' => $this->input->post('acc-classification-edit-elements'),
					'acc-classification-edit-id' => $this->input->post('acc-classification-edit-id'),
					'acc-classification-edit-join-id' => $this->input->post('acc-classification-edit-join-id')
				];
			COA_Model::acc_classification_edit($data);
		}
		$this->session->set_flashdata('seq_active', '2');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_classification_update(){
		if($this->input->post('acc-classification-update-code') !== '' && $this->input->post('acc-classification-update-name') !== ''){
			$data = [
					'lvl_2_code' => $this->input->post('acc-classification-update-code'),
					'lvl_2_name' => $this->input->post('acc-classification-update-name'),
					'lvl_2_company' => 'docpro',
					'lvl_1_id' => $this->input->post('acc-classification-update-elements'),
					'acc-classification-update-id' => $this->input->post('acc-classification-update-id'),
					'acc-classification-update-join-id' => $this->input->post('acc-classification-update-join-id')
				];
			COA_Model::acc_classification_update($data);
		}
		$this->session->set_flashdata('seq_active', '2');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_classification_delete(){
		COA_Model::acc_classification_delete($this->input->post('acc-classification-delete-id'), $this->input->post('acc-classification-delete-join-id'));
		$this->session->set_flashdata('seq_active', '2');
		redirect('docpro_setup/chart_of_accounts');
	}

// LINE ITEMS
	public function line_items_get(){
		echo json_encode(['data' => COA_Model::line_items_get()]);
	}
	public function line_items_add(){
		if($this->input->post('line-items-add-code') !== '' && $this->input->post('line-items-add-name') !== ''){
			$data = [
					'lvl_3_code' => $this->input->post('line-items-add-code'),
					'lvl_3_name' => $this->input->post('line-items-add-name'),
					'lvl_3_company' => 'docpro',
					'lvl_2_id' => $this->input->post('line-items-add-classification')

				];
			COA_Model::line_items_add($data);
		}
		$this->session->set_flashdata('seq_active', '3');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function line_items_edit(){
		if($this->input->post('line-items-edit-code') !== '' && $this->input->post('line-items-edit-name') !== ''){
			$data = [
					'lvl_3_code' => $this->input->post('line-items-edit-code'),
					'lvl_3_name' => $this->input->post('line-items-edit-name'),
					'lvl_2_id' => $this->input->post('line-items-edit-classification'),
					'line-items-edit-id' => $this->input->post('line-items-edit-id'),
					'line-items-edit-join-id' => $this->input->post('line-items-edit-join-id')
				];
			COA_Model::line_items_edit($data);
		}
		$this->session->set_flashdata('seq_active', '3');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function line_items_update(){
		if($this->input->post('line-items-update-code') !== '' && $this->input->post('line-items-update-name') !== ''){
			$data = [
					'lvl_3_code' => $this->input->post('line-items-update-code'),
					'lvl_3_name' => $this->input->post('line-items-update-name'),
					'lvl_3_company' => 'docpro',
					'lvl_2_id' => $this->input->post('line-items-update-classification'),
					'line-items-update-id' => $this->input->post('line-items-update-id'),
					'line-items-update-join-id' => $this->input->post('line-items-update-join-id')
				];
			COA_Model::line_items_update($data);
		}
		$this->session->set_flashdata('seq_active', '3');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function line_items_delete(){
		COA_Model::line_items_delete($this->input->post('line-items-delete-id'), $this->input->post('line-items-delete-join-id'));
		$this->session->set_flashdata('seq_active', '3');
		redirect('docpro_setup/chart_of_accounts');
	}

// ACCOUNT SUBCLASSIFICATION
	public function acc_sub_get(){
		echo json_encode(['data' => COA_Model::acc_sub_get()]);
	}
	public function acc_sub_add(){
		if($this->input->post('acc-sub-add-code') !== '' && $this->input->post('acc-sub-add-name') !== ''){
			$data = [
					'lvl_4_code' => $this->input->post('acc-sub-add-code'),
					'lvl_4_name' => $this->input->post('acc-sub-add-name'),
					'lvl_4_company' => 'docpro',
					'lvl_3_id' => $this->input->post('acc-sub-add-line-item')
				];
			COA_Model::acc_sub_add($data);
		}
		$this->session->set_flashdata('seq_active', '4');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_sub_edit(){
		if($this->input->post('acc-sub-edit-code') !== '' && $this->input->post('acc-sub-edit-name') !== ''){
			$data = [
					'lvl_4_code' => $this->input->post('acc-sub-edit-code'),
					'lvl_4_name' => $this->input->post('acc-sub-edit-name'),
					'lvl_3_id' => $this->input->post('acc-sub-edit-line-item'),
					'acc-sub-edit-id' => $this->input->post('acc-sub-edit-id'),
					'acc-sub-edit-join-id' => $this->input->post('acc-sub-edit-join-id')
				];
			COA_Model::acc_sub_edit($data);
		}
		$this->session->set_flashdata('seq_active', '4');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_sub_update(){
		if($this->input->post('acc-sub-update-code') !== '' && $this->input->post('acc-sub-update-name') !== ''){
			$data = [
					'lvl_4_code' => $this->input->post('acc-sub-update-code'),
					'lvl_4_name' => $this->input->post('acc-sub-update-name'),
					'lvl_4_company' => 'docpro',
					'lvl_3_id' => $this->input->post('acc-sub-update-line-item'),
					'acc-sub-update-id' => $this->input->post('acc-sub-update-id'),
					'acc-sub-update-join-id' => $this->input->post('acc-sub-update-join-id')
				];
			COA_Model::acc_sub_update($data);
		}
		$this->session->set_flashdata('seq_active', '4');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function acc_sub_delete(){
		COA_Model::acc_sub_delete($this->input->post('acc-sub-delete-id'), $this->input->post('acc-sub-delete-join-id'));
		$this->session->set_flashdata('seq_active', '4');
		redirect('docpro_setup/chart_of_accounts');
	}

// ACCOUNT SUBCLASSIFICATION
	public function bir_get(){
		echo json_encode(['data' => COA_Model::bir_get()]);
	}
	public function bir_add(){
		if($this->input->post('bir-add-code') !== '' && $this->input->post('bir-add-name') !== ''){
			$data = [
					'bir_code' => $this->input->post('bir-add-code'),
					'bir_classification' => $this->input->post('bir-add-name'),
					'bir_company' => 'docpro'
				];
			COA_Model::bir_add($data);
		}
		$this->session->set_flashdata('seq_active', '5');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function bir_edit(){
		if($this->input->post('bir-edit-code') !== '' && $this->input->post('bir-edit-name') !== ''){
			$data = [
					'bir_code' => $this->input->post('bir-edit-code'),
					'bir_classification' => $this->input->post('bir-edit-name'),
				];
			COA_Model::bir_edit($this->input->post('bir-edit-id'), $data);
		}
		$this->session->set_flashdata('seq_active', '5');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function bir_update(){
		if($this->input->post('bir-update-code') !== '' && $this->input->post('bir-update-name') !== ''){
			$data = [
					'bir_code' => $this->input->post('bir-update-code'),
					'bir_classification' => $this->input->post('bir-update-name'),
					'bir_company' => 'docpro'
				];
			COA_Model::bir_update($this->input->post('bir-update-id'), $data);
		}
		$this->session->set_flashdata('seq_active', '5');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function bir_delete(){
		COA_MODEL::bir_delete($this->input->post('bir-delete-id'));
		$this->session->set_flashdata('seq_active', '5');
		redirect('docpro_setup/chart_of_accounts');
	}

// CHART OF ACCOUNTS
	public function coa_get(){
		echo json_encode(['data' => COA_Model::coa_get()]);
	}
	public function coa_add(){
		$data = [
					'coa_code' => $this->input->post('coa-add-code'),
					'coa_name' => $this->input->post('coa-add-name'),
					'lvl_1_id' => $this->input->post('coa-add-lvl-1'),
					'lvl_2_id' => $this->input->post('coa-add-lvl-2'),
					'lvl_3_id' => $this->input->post('coa-add-lvl-3'),
					'lvl_4_id' => $this->input->post('coa-add-lvl-4'),
					'bir_id'   => $this->input->post('coa-add-bir'),
					'coa_company' => 'docpro'
				];
		COA_Model::coa_add($data);
		$this->session->set_flashdata('seq_active', '6');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function coa_edit(){
		$data = [
					'coa_code' => $this->input->post('coa-edit-code'),
					'coa_name' => $this->input->post('coa-edit-name'),
					'lvl_1_id' => $this->input->post('coa-edit-lvl-1'),
					'lvl_2_id' => $this->input->post('coa-edit-lvl-2'),
					'lvl_3_id' => $this->input->post('coa-edit-lvl-3'),
					'lvl_4_id' => $this->input->post('coa-edit-lvl-4'),
					'bir_id'   => $this->input->post('coa-edit-bir'),
					'coa_company' => 'docpro'
				];
		COA_Model::coa_edit($this->input->post('coa-edit-id'), $data);
		$this->session->set_flashdata('seq_active', '6');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function coa_update(){
		$data = [
					'coa_code' => $this->input->post('coa-update-code'),
					'coa_name' => $this->input->post('coa-update-name'),
					'lvl_1_id' => $this->input->post('coa-update-lvl-1'),
					'lvl_2_id' => $this->input->post('coa-update-lvl-2'),
					'lvl_3_id' => $this->input->post('coa-update-lvl-3'),
					'lvl_4_id' => $this->input->post('coa-update-lvl-4'),
					'bir_id'   => $this->input->post('coa-update-bir'),
					'coa_company' => 'docpro'
				];
		COA_Model::coa_edit($this->input->post('coa-update-id'), $data);
		$this->session->set_flashdata('seq_active', '6');
		redirect('docpro_setup/chart_of_accounts');
	}
	public function coa_delete(){
		COA_Model::coa_delete($this->input->post('coa-delete-id'));
		$this->session->set_flashdata('seq_active', '6');
		redirect('docpro_setup/chart_of_accounts');
	}

}

