<?php
class Documents extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Documents_Model::get($this->session->userdata('user')->cb_id)));
    }
    public function add(){
        $data = array(
                        'd_class'=>$this->input->post('add-class'), 
                        'd_name'=>$this->input->post('add-name'), 
                        'd_shortname'=>$this->input->post('add-shortname'),
                        'j_id'=>$this->input->post('add-journal-id')
                    );
        $insert_id = Documents_Model::add($data);
        $code = array('d_code'=>$this->input->post('add-journal-code')."".$insert_id);
        Documents_Model::edit($insert_id, $code);
        Co_Documents_Model::add(['d_id' => $insert_id, 'cb_id' => $this->session->userdata('user')->cb_id]);
        redirect('docpro_setup/documents', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array(
                        'd_code'=>$this->input->post('edit-journal-code')."".$id, 
                        'd_class'=>$this->input->post('edit-class'), 
                        'd_name'=>$this->input->post('edit-name'), 
                        'd_shortname'=>$this->input->post('edit-shortname'),
                        'j_id'=>$this->input->post('edit-journal-id')
                    );
        Documents_Model::edit($id, $data);
        redirect('docpro_setup/documents', 'refresh');
    }
    public function update(){
        $data = array(
                        'd_class'=>$this->input->post('update-class'), 
                        'd_name'=>$this->input->post('update-name'), 
                        'd_shortname'=>$this->input->post('update-shortname'),
                        'j_id'=>$this->input->post('update-journal-id')
        );
        $insert_id = Documents_Model::update($data, $this->input->post('update-id'));
        $code = array('d_code'=>$this->input->post('update-journal-code')."".$insert_id);
        Documents_Model::edit($insert_id, $code);
        Co_Documents_Model::add(['d_id' => $insert_id, 'cb_id' => $this->session->userdata('user')->cb_id]);
        redirect('docpro_setup/documents', 'refresh');
    }
}