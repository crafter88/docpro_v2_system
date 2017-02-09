<?php
class Others extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=>Co_Others_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $data = [
                    'co_o_name'=>$this->input->post('add-name'), 
                    'cb_id'=>$this->session->userdata('user')->cb_id
                ];
        Co_Others_Model::add($data);
        redirect('company_settings/others', 'refresh');
    }
    public function edit(){
        $data = [
                    'co_o_name'=>$this->input->post('edit-name')
                ];
        $id = $this->input->post('edit-id');
        Co_Others_Model::edit($data, $id);
        redirect('company_settings/others', 'refresh');
    }
    public function update(){
        $data = [
                    'co_o_name'=>$this->input->post('update-name'),
                    'cb_id'=>$this->session->userdata('user')->cb_id
                ];
        $id = $this->input->post('update-id');
        Co_Others_Model::update($data, $id);
        redirect('company_settings/others', 'refresh');
    }
}