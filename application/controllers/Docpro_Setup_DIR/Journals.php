<?php

class Journals extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function get(){
		echo json_encode(['data' => Journals_Model::get()]);
	}
	    public function add(){
        $data = array(
                        'j_name'=>$this->input->post('add-name'), 
                        'j_shortname'=>$this->input->post('add-shortname'), 
                        'j_company'=>'docpro',
                    );
        $j_id = Journals_Model::add($data);
        Journals_Model::edit($j_id, ['j_code' => $j_id]);
        redirect('docpro_setup/journals', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array(
                        'j_name'=>$this->input->post('edit-name'), 
                        'j_shortname'=>$this->input->post('edit-shortname')
                    );
        Journals_Model::edit($id, $data);
        redirect('docpro_setup/journals', 'refresh');
    }
    public function update(){
        $data = array(
                        'j_name'=>$this->input->post('update-name'), 
                        'j_shortname'=>$this->input->post('update-shortname'),
                        'j_company'=>'docpro' 
                    );
        $j_id = Journals_Model::update($data, $this->input->post('update-id'));
        Journals_Model::edit($j_id, ['j_code' => $j_id]);
        redirect('docpro_setup/journals', 'refresh');
    }
}