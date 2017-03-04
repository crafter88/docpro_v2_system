<?php
class Business_Partners extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(['data' => Co_Business_Partners_Model::get($this->session->userdata('user'))]);
    }
    public function add(){
        $data = [
                      'co_bp_name'=>$this->input->post('add-name'),
                      'co_bp_trade_name'=>$this->input->post('add-trade-name'),
                      'bp_name'=>$this->input->post('add-name'),
                      'co_bp_shortname'=>$this->input->post('add-shortname'),
                      'co_bp_bus_style'=>$this->input->post('add-style'),
                      'co_bp_address'=>$this->input->post('add-address'),
                      'co_bp_tin'=>$this->input->post('add-tin'),
                      'co_bp_particulars'=>$this->input->post('add-particulars'),
                      'bpc_id'=>$this->input->post('add-class'),
                      'bpt_id'=>$this->input->post('add-type'),
                      'cb_id'=>$this->session->userdata('user')->cb_id
                ];
        $new_class = $this->input->post('new-class');
        $bpc_code = $this->input->post('bpc_code');    
        Co_Business_Partners_Model::add($data, $new_class, $bpc_code, $this->input->post('add-tax-1'), $this->input->post('add-tax-2'), $this->input->post('add-tax-3'), $this->session->userdata('user'));
        redirect('company_settings/business_partners', 'refresh');
    }
    public function edit(){
        $data = [
                      'co_bp_code'=>$this->input->post('edit-code'),
                      'co_bp_name'=>$this->input->post('edit-name'),
                      'co_bp_trade_name'=>$this->input->post('edit-trade-name'),
                      'bp_name'=>$this->input->post('edit-name'),
                      'co_bp_shortname'=>$this->input->post('edit-shortname'),
                      'co_bp_bus_style'=>$this->input->post('edit-style'),
                      'co_bp_address'=>$this->input->post('edit-address'),
                      'co_bp_tin'=>$this->input->post('edit-tin'),
                      'co_bp_particulars'=>$this->input->post('edit-particulars'),
                      'bpc_id'=>$this->input->post('edit-class'),
                      'bpt_id'=>$this->input->post('edit-type')
                ];
        $new_class = $this->input->post('new-class');
        $bpc_code = $this->input->post('bpc_code');
        $id = $this->input->post('edit-id');
        Co_Business_Partners_Model::edit($data, $id, $new_class, $bpc_code, $this->input->post('add-tax-1'), $this->input->post('add-tax-2'), $this->input->post('add-tax-3'), $this->session->userdata('user'));
        redirect('company_settings/business_partners', 'refresh');
    }
    public function update(){
        $data = [
                      'co_bp_code'=>$this->input->post('update-code'),
                      'co_bp_name'=>$this->input->post('update-name'),
                      'co_bp_trade_name'=>$this->input->post('update-trade-name'),
                      'bp_name'=>$this->input->post('update-name'),
                      'co_bp_shortname'=>$this->input->post('update-shortname'),
                      'co_bp_bus_style'=>$this->input->post('update-style'),
                      'co_bp_address'=>$this->input->post('update-address'),
                      'co_bp_tin'=>$this->input->post('update-tin'),
                      'co_bp_particulars'=>$this->input->post('update-particulars'),
                      'bpc_id'=>$this->input->post('update-class'),
                      'bpt_id'=>$this->input->post('update-type'),
                      'cb_id'=>$this->session->userdata('user')->cb_id
                ];
        $new_class = $this->input->post('new-class');
        $bpc_code = $this->input->post('bpc_code');
        $id = $this->input->post('update-id');
        Co_Business_Partners_Model::update($data, $id, $new_class, $bpc_code, $this->input->post('add-tax-1'), $this->input->post('add-tax-2'), $this->input->post('add-tax-3'), $this->session->userdata('user'));
        redirect('company_settings/business_partners', 'refresh');
    }
    public function get_bp_class(){
      echo json_encode(Co_Business_Partners_Model::get_bp_class($this->session->userdata('user')));
    }
    public function get_bp_type(){
      echo json_encode(Co_Business_Partners_Model::get_bp_type($this->session->userdata('user')));
    }
    public function get_tax_1(){
      echo json_encode(Co_Business_Partners_Model::get_tax_1($this->session->userdata('user')));
    }
    public function get_tax_2(){
      echo json_encode(Co_Business_Partners_Model::get_tax_2($this->session->userdata('user')));
    }
    public function get_tax_3(){
      echo json_encode(Co_Business_Partners_Model::get_tax_3($this->session->userdata('user')));
    }
    public function get_filter1(){
        echo json_encode(Co_Business_Partners_Model::get_filter1($this->session->userdata('user')));
    }
    public function get_filter2(){
        echo json_encode(Co_Business_Partners_Model::get_filter2($this->session->userdata('user')));
    }
    public function filter_table(){
        $filter1 = $this->input->get('filter1');
        $filter2 = $this->input->get('filter2');
        echo json_encode(['data'=> Co_Business_Partners_Model::filter_table($this->session->userdata('user'), $filter1, $filter2)]);
    }
}