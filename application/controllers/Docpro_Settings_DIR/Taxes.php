<?php
class Taxes extends CI_Controller{
    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get($slug){
        echo json_encode(array('data' => Taxes_Model::get($slug)));
    }
    public function get_tax_types(){
        echo json_encode(Taxes_Model::get_tax_types());
    }
    public function add(){
        $data = array(
                        't_name'=>$this->input->post('add-name'), 
                        't_shortname'=>$this->input->post('add-shortname'), 
                        't_rate'=>$this->input->post('add-rate'), 
                        't_base'=>$this->input->post('add-base'), 
                        'tt_id'=>$this->input->post('add-type-id'),
                        't_company'=>'docpro',
                        't_setup_company'=>'docpro'
                    );
        Taxes_Model::add($data);
        redirect('docpro_settings/taxes', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');
        $data = array(
                        't_name'=>$this->input->post('edit-name'), 
                        't_shortname'=>$this->input->post('edit-shortname'), 
                        't_rate'=>$this->input->post('edit-rate'), 
                        't_base'=>$this->input->post('edit-base'), 
                        'tt_id'=>$this->input->post('edit-type-id')
                    );
        Taxes_Model::edit($id, $data);
        redirect('docpro_settings/taxes', 'refresh');    
    }
    public function update(){
        $data = array(
                        't_name'=>$this->input->post('update-name'), 
                        't_shortname'=>$this->input->post('update-shortname'), 
                        't_rate'=>$this->input->post('update-rate'), 
                        't_base'=>$this->input->post('update-base'), 
                        'tt_id'=>$this->input->post('update-type-id'),
                        't_company'=>'docpro'
                    );
        Taxes_Model::update($data, $this->input->post('update-id'));
        redirect('docpro_settings/taxes', 'refresh');
    }
}