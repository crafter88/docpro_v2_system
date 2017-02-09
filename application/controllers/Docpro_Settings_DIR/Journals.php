<?php

class Journals extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Journals_Model::get()]);
	}
    public function add(){
        $data = [
                    'j_name'=>$this->input->post('add-name'), 
                    'j_shortname'=>$this->input->post('add-shortname'), 
                    'j_company'=>'docpro',
                ];
        Journals_Model::add($data);
        redirect('docpro_settings/journals', 'refresh');
    }
    public function edit(){
        $data = [
                    'j_code'=>$this->input->post('edit-code'),
                    'j_name'=>$this->input->post('edit-name'), 
                    'j_shortname'=>$this->input->post('edit-shortname')
                ];
        $id = $this->input->post('edit-id');
        Journals_Model::edit($data, $id);
        redirect('docpro_settings/journals', 'refresh');
    }
    public function update(){
        $data = [
                    'j_code'=>$this->input->post('update-code'), 
                    'j_name'=>$this->input->post('update-name'), 
                    'j_shortname'=>$this->input->post('update-shortname'),
                    'j_company'=>'docpro' 
                ];
        $id = $this->input->post('update-id');
        Journals_Model::update($data, $id);
        redirect('docpro_settings/journals', 'refresh');
    }
}