<?php

class COA extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

// CHART OF ACCOUNTS
	public function coa_get(){
		echo json_encode(['data' => COA_Model::coa_get()]);
	}
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
		COA_Model::coa_add($data, $lvl_5, $lvl_4_id, $this->session->userdata('user'));
		redirect('docpro_settings/chart_of_accounts');
	}

	// public function coa_edit(){
	// 	$data = [
	// 				'coa_code' => $this->input->post('coa-edit-code'),
	// 				'coa_name' => $this->input->post('coa-edit-name'),
	// 				'lvl_1_id' => $this->input->post('coa-edit-lvl-1'),
	// 				'lvl_2_id' => $this->input->post('coa-edit-lvl-2'),
	// 				'lvl_3_id' => $this->input->post('coa-edit-lvl-3'),
	// 				'lvl_4_id' => $this->input->post('coa-edit-lvl-4'),
	// 				'lvl_5_id' => $this->input->post('coa-edit-lvl-5-input'),
	// 				'lvl_6_id' => $this->input->post('coa-edit-lvl-6-input'),
	// 				'coa_company' => 'docpro'
	// 			];
	// 	COA_Model::coa_edit($this->input->post('coa-edit-id'), $data);
	// 	redirect('docpro_settings/chart_of_accounts');
	// }
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
		COA_Model::coa_edit($data, $lvl_5, $lvl_4_id, $lvl_5_id, $id, $o_lvl5_id, $this->session->userdata('user'));
		redirect('docpro_settings/chart_of_accounts');
	}
	public function coa_delete(){
		$id = $this->input->post('delete-id');
		$lvl_5_id = $this->input->post('o_lvl5_id');
		COA_Model::coa_delete($id, $lvl_5_id);
		redirect('docpro_settings/chart_of_accounts');
	}
	public function redirect_coa_setup($slug){
		$this->session->set_flashdata('seq_active', $slug);
		redirect('docpro_setup/chart_of_accounts');
	}

// LEVEL FILTER
	public function filter_lvl1(){
		echo json_encode(COA_Model::filter_lvl1());
	}
	public function filter_lvl2($slug){
		echo json_encode(COA_Model::filter_lvl2($slug));
	}
	public function filter_lvl3($slug){
		echo json_encode(COA_Model::filter_lvl3($slug));
	}
	public function filter_lvl4($slug){
		echo json_encode(COA_Model::filter_lvl4($slug));
	}
	public function filter_lvl5($slug){
		echo json_encode(COA_Model::filter_lvl5($slug));
	}
	public function filter_lvl6($slug){
		echo json_encode(COA_Model::filter_lvl6($slug));
	}

	public function coa_get_lvl5($slug){
		echo json_encode(COA_Model::coa_get_lvl5($slug));
	}

}

