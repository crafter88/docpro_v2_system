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
					'tt_company' => 'docpro',
					'tt_setup_company' => 'docpro'
				];
		Tax_Types_Model::add($data);
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/taxes', 'refresh');
	}
	public function edit(){
		$data = [
					'tt_code' => $this->input->post('tt-edit-code'),
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
					'tt_company' => 'docpro',
					'tt_setup_company' => 'docpro'
				];
		Tax_Types_Model::update($this->input->post('tt-update-id'), $data);
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/taxes', 'refresh');
	}
	public function delete(){
		Tax_Types_Model::delete($this->input->post('tt-delete-id'));
		$this->session->set_flashdata('seq_active', '1');
		redirect('docpro_setup/taxes', 'refresh');
	}
}