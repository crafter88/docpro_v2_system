<?php

class Tax_Types extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Co_Tax_Types_Model::get($this->session->userdata('user'))]);
	}
	public function add(){
		$data = [
					'tt_name' => $this->input->post('tt-add-name'),
					'tt_shortname' => $this->input->post('tt-add-shortname'),
					'tt_company' => 'company'
				];
		Co_Tax_Types_Model::add($data, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '1');
		redirect('company_settings/taxes', 'refresh');
	}
	public function edit(){
		$data = [
					'tt_code' => $this->input->post('tt-edit-code'),
					'tt_name' => $this->input->post('tt-edit-name'),
					'tt_shortname' => $this->input->post('tt-edit-shortname')
				];
		$id = $this->input->post('tt-edit-id');
		Co_Tax_Types_Model::edit($data, $id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '1');
		redirect('company_settings/taxes', 'refresh');
	}
	public function update(){
		$data = [
					'tt_code' => $this->input->post('tt-update-code'),
					'tt_name' => $this->input->post('tt-update-name'),
					'tt_shortname' => $this->input->post('tt-update-shortname'),
					'tt_company' => 'company'
				];
		$id = $this->input->post('tt-update-id');
		Co_Tax_Types_Model::update($data, $id, $this->session->userdata('user'));
		$this->session->set_flashdata('seq_active', '1');
		redirect('company_settings/taxes', 'refresh');
	}
	public function delete(){
		Co_Tax_Types_Model::delete($this->input->post('tt-delete-id'));
		$this->session->set_flashdata('seq_active', '1');
		redirect('company_settings/taxes', 'refresh');
	}

	public function enable_tax_type(){
		Co_Tax_Types_Model::enable_tax_type($this->input->get('id'));
	}

	public function disable_tax_type(){
		Co_Tax_Types_Model::disable_tax_type($this->input->get('id'));
	}
}