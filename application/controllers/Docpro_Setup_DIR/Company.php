<?php
class Company extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Company_Branches_Model::get()));
    }
    public function add(){
        $data = array(
                      'cb_ind_name'=>$this->input->post('add-ind-name'),
                      'cb_name'=>$this->input->post('add-name'),
                      'name'=>($this->input->post('add-name') != NULL) ? $this->input->post('add-name') : $this->input->post('add-ind-name'),
                      'cb_address'=>$this->input->post('add-address'), 
                      'cb_tin'=>$this->input->post('add-tin'), 
                      'cb_class'=>'Company', 
                      'bpt_id'=>$this->input->post('add-type-id'), 
                      'cb_tax_type'=>$this->input->post('add-tax-type'),
                      'cb_cno'=>$this->input->post('add-cno'),
                      'cb_email'=>$this->input->post('add-email')
                    );

        $insert_id = Company_Branches_Model::add($data);
        $code = array('cb_code'=>$this->input->post('add-type-code')."".$this->input->post('add-tax-type-code')."".$insert_id);
        Company_Branches_Model::edit($insert_id, $code);        
        redirect('docpro_setup/company', 'refresh');
    }
    public function edit(){
        $id = $this->input->post('edit-id');        
        $data = array(
                      'cb_code'=>$this->input->post('edit-type-code')."".$this->input->post('edit-tax-type-code')."".$id,
                      'cb_name'=>$this->input->post('edit-name'),
                      'name'=>($this->input->post('edit-name') != NULL) ? $this->input->post('edit-name') : $this->input->post('edit-ind-name'),
                      'cb_ind_name'=>$this->input->post('edit-ind-name'), 
                      'cb_address'=>$this->input->post('edit-address'),
                      'cb_tin'=>$this->input->post('edit-tin'),
                      'cb_class'=>'Company',
                      'bpt_id'=>$this->input->post('edit-type-id'), 
                      'cb_tax_type'=>$this->input->post('edit-tax-type'),
                      'cb_cno'=>$this->input->post('edit-cno'),
                      'cb_email'=>$this->input->post('edit-email')
                    );
        Company_Branches_Model::edit($id, $data);
        redirect('docpro_setup/company', 'refresh');
    }
    public function update(){
            $data = array(
                          'cb_name'=>$this->input->post('update-name'),
                          'cb_ind_name'=>$this->input->post('update-ind-name'), 
                          'name'=>($this->input->post('update-name') != NULL) ? $this->input->post('update-name') : $this->input->post('update-ind-name'),
                          'cb_address'=>$this->input->post('update-address'), 
                          'cb_tin'=>$this->input->post('update-tin'), 
                          'cb_class'=>'Company', 
                          'bpt_id'=>$this->input->post('update-type-id'), 
                          'cb_tax_type'=>$this->input->post('update-tax-type'),
                          'cb_cno'=>$this->input->post('update-cno'),
                          'cb_email'=>$this->input->post('update-email')
                        );
        $insert_id = Company_Branches_Model::update($data, $this->input->post('update-id'));
        $code = array('cb_code'=>$this->input->post('update-type-code')."".$this->input->post('update-tax-type-code')."".$insert_id);
        Company_Branches_Model::edit($insert_id, $code);        
        redirect('docpro_setup/company', 'refresh');
    }
}