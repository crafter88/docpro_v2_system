<?php

class Tax_Types extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Tax_Types_Model::get()]);
	}
	public function add(){
		$data = [
					'tt_name' => $this->input->post('tt-add-name'),
					'tt_shortname' => $this->input->post('tt-add-shortname'),
					'tt_company' => 'docpro'
				];
		$tt_id = Tax_Types_Model::add($data);
		Tax_Types_Model::edit($tt_id, ['tt_code' => $tt_id]);
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/taxes', 'refresh');
	}
	public function edit(){
		$data = [
					'tt_name' => $this->input->post('tt-edit-name'),
					'tt_shortname' => $this->input->post('tt-edit-shortname'),
				];
		Tax_Types_Model::edit($this->input->post('tt-edit-id'), $data);
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/taxes', 'refresh');
	}
	public function update(){
		$data = [
					'tt_name' => $this->input->post('tt-update-name'),
					'tt_shortname' => $this->input->post('tt-update-shortname'),
					'tt_company' => 'docpro'
				];
		$tt_id = Tax_Types_Model::update($this->input->post('tt-update-id'), $data);
		Tax_Types_Model::edit($tt_id, ['tt_code' => $tt_id]);
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/taxes', 'refresh');
	}
}