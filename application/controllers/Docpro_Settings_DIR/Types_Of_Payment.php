<?php

class Types_Of_Payment extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Types_Of_Payment_Model::get()]);
	}
	public function add(){
		if ($this->input->post('top-add-type') !== '') {
			$data = [
						'top_type' => $this->input->post('top-add-type'),
						'top_company' => 'docpro'
					];
			$top_id = Types_Of_Payment_Model::add($data);
			Types_Of_Payment_Model::edit($top_id, ['top_code' => $top_id]);
		}
		$this->session->set_flashdata('seq_active', '1');
        redirect('docpro_setup/payment', 'refresh');
	}
	public function edit(){
		if($this->input->post('top-edit-type') !== ''){
			Types_Of_Payment_Model::edit($this->input->post('top-edit-id'), ['top_type' => $this->input->post('top-edit-type')]);
		}
		$this->session->set_flashdata('seq_active', '1');
        redirect('docpro_setup/payment', 'refresh');
	}
	public function update(){
		if($this->input->post('top-update-type') !== ''){
			$data = [
						'top_type' => $this->input->post('top-update-type'),
						'top_company' => 'docpro',
					];
			$top_id = Types_Of_Payment_Model::update($this->input->post('top-update-id'), $data);
			Types_Of_Payment_Model::edit($top_id, ['top_code' => $top_id]);
		}
		$this->session->set_flashdata('seq_active', '1');
        redirect('docpro_setup/payment', 'refresh');
	}
}