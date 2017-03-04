<?php
class Branches extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data'=>CB_Br_Model::get($this->session->userdata('user'))));
    }
    public function add(){
        $co_ba_number = $this->input->post('br_ba_number');
        $co_ba_street = $this->input->post('br_ba_street');
        $co_ba_brangay = $this->input->post('br_ba_barangay');
        $co_ba_city = $this->input->post('br_ba_city');
        $co_ba_province = $this->input->post('br_ba_province');
        $co_ba_zip = $this->input->post('br_ba_zip');
        $data = [
            'cb_name' => $this->input->post('branch_name'),
            'name' => $this->input->post('branch_name'),
            'cb_address' => $co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
            'cb_tin' => $this->input->post('branch_tin'),
            'cb_class' => 'branch',
            'cb_bp_type' => 'Non-Individual',
            'cb_tax_type' => $this->input->post('branch_tax_type'),
            'cb_seq' => $this->session->userdata('user')->ch_cb_seq,
            'cb_cno' => $this->input->post('branch_cno'),
            'cb_email' => $this->input->post('branch_email')
        ];
        CB_Br_Model::add($data, $this->session->userdata('user'));
        redirect('company_settings/branches', 'refresh');
    }
    public function edit(){  
        $co_ba_number = $this->input->post('br_ba_number');
        $co_ba_street = $this->input->post('br_ba_street');
        $co_ba_brangay = $this->input->post('br_ba_barangay');
        $co_ba_city = $this->input->post('br_ba_city');
        $co_ba_province = $this->input->post('br_ba_province');
        $co_ba_zip = $this->input->post('br_ba_zip');   
        $data = [
                    'ch_cb_code'=>$this->input->post('edit-code'), 
                    'ch_cb_name'=>$this->input->post('edit-name'), 
                    'ch_name'=>$this->input->post('edit-name'), 
                    'ch_cb_address'=>$co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
                    'ch_cb_tax_type' => $this->input->post('edit-tax-type'),
                    'ch_cb_tin'=>$this->input->post('edit-tin'),
                    'ch_cb_cno'=>$this->input->post('edit-cno'), 
                    'ch_cb_email'=>$this->input->post('edit-email'), 
                ];
        $id = $this->input->post('edit-id');
        $ch_cb_id = $this->input->post('ch-cb-id');
        CB_Br_Model::edit($data, $id, $ch_cb_id, $this->session->userdata('user'));
        redirect('company_settings/branches', 'refresh');
    }
    public function update(){
        $co_ba_number = $this->input->post('br_ba_number');
        $co_ba_street = $this->input->post('br_ba_street');
        $co_ba_brangay = $this->input->post('br_ba_barangay');
        $co_ba_city = $this->input->post('br_ba_city');
        $co_ba_province = $this->input->post('br_ba_province');
        $co_ba_zip = $this->input->post('br_ba_zip');
        $data = [
                    'ch_cb_id'=>$this->input->post('ch-cb-id'),
                    'ch_cb_code'=>$this->input->post('update-code'), 
                    'ch_cb_name'=>$this->input->post('update-name'), 
                    'ch_name'=>$this->input->post('update-name'), 
                    'ch_cb_address'=>$co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
                    'ch_cb_tin'=>$this->input->post('update-tin'), 
                    'ch_cb_class' => 'branch',
                    'ch_cb_bp_type' => 'Non-Individual',
                    'ch_cb_tax_type' => $this->input->post('update-tax-type'),
                    'ch_cb_seq' => $this->session->userdata('user')->ch_cb_seq,
                    'ch_cb_cno'=>$this->input->post('update-cno'), 
                    'ch_cb_email'=>$this->input->post('update-email'), 
                ];
        $id = $this->input->post('update-id');
        $ch_cb_id = $this->input->post('ch-cb-id');
        $cbbr_id = $this->input->post('cbbr-id');
        CB_Br_Model::update($data, $id, $ch_cb_id, $cbbr_id, $this->session->userdata('user'));
        redirect('company_settings/branches', 'refresh');
    }
    public function filter_table(){
        $filter1 = $this->input->get('filter1');
        echo json_encode(['data' => CB_Br_Model::filter_table($this->session->userdata('user'), $filter1)]);
    }
}