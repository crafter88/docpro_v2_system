<?php
class Company extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Company_Branches_Model::get($this->session->userdata('user')->cb_id)));
    }
    public function edit(){      
        $data = [ 
                  'cb_address'=>$this->input->post('edit-address'),
                  'cb_cno'=>$this->input->post('edit-cno'),
                  'cb_email'=>$this->input->post('edit-email')
                ];
        $id = $this->input->post('edit-id');  
        Company_Branches_Model::edit($data, $id);
        redirect('docpro_settings/company', 'refresh');
    }
    public function update(){
        $data = [
                  'cb_address'=>$this->input->post('update-address'), 
                  'cb_cno'=>$this->input->post('update-cno'),
                  'cb_email'=>$this->input->post('update-email')
                ];
        $id = $this->input->post('update-id');
        Company_Branches_Model::update($data, $id);   
        redirect('docpro_settings/company', 'refresh');
    }
    public function get_branch($slug){
        echo json_encode(['data' => Company_Branches_Model::get_branch($slug)]);
    }
}