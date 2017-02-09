<?php

class Modals extends CI_Controller{

	function __construct(){
		parent::__construct();
	}

	public function add_product(){
		$data = [
					'co_p_name' => $this->input->post('add-name'),
					'co_p_shortname' => $this->input->post('add-shortname'),
					'co_p_description' => $this->input->post('add-description'),
					'co_de_id' => $this->input->post('add-department'),
					'co_pcc_id' => $this->input->post('add-pcc'),
				];
		$id = Co_Products_Model::add($data, $this->session->userdata('user'));
		echo json_encode($id);
	}

	public function add_service(){
		$data = [
                    'co_s_name' => $this->input->post('add-name'),
                    'co_s_shortname' => $this->input->post('add-shortname'),
                    'co_s_description' => $this->input->post('add-description'),
                    'co_de_id' => $this->input->post('add-department'),
                    'co_pcc_id' => $this->input->post('add-pcc')
                ];
        $id = Co_Services_Model::add($data, $this->session->userdata('user'));
        echo json_encode($id);
	}

	public function add_product_service(){
		$type = $this->input->post('add-type');
		$add_name = $this->input->post('add-name');
		$add_shortname = $this->input->post('add-shortname');
		$add_description = $this->input->post('add-description');
		$add_department = $this->input->post('add-department');
		$add_pcc = $this->input->post('add-pcc');
		$id = 0;
		$data = [];
		if($type === 'service'){
			$data = [
                    'co_s_name' => $add_name,
                    'co_s_shortname' => $add_shortname,
                    'co_s_description' => $add_description,
                    'co_de_id' => $add_department,
                    'co_pcc_id' => $add_pcc
                ];
       		$id = Co_Services_Model::add($data, $this->session->userdata('user'));
		}
		if($type === 'product'){
			$data = [
					'co_p_name' => $add_name,
					'co_p_shortname' => $add_shortname,
					'co_p_description' => $add_description,
					'co_de_id' => $add_department,
					'co_pcc_id' => $add_pcc
				];
			$id = Co_Products_Model::add($data, $this->session->userdata('user'));
		}
		echo json_encode(['id' => $id, 'type' => $type]);
	}

	public function add_discount(){
		$data = [
                    'co_d_name' => $this->input->post('add-name'),
                    'co_d_shortname' => $this->input->post('add-shortname'),
                    'co_d_rate' => $this->input->post('add-rate'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $id =  Co_Discounts_Model::add($data, $this->session->userdata('user'));
        echo json_encode($id);
	}

	public function add_bank(){
		$bank = [
                    'b_name' => $this->input->post('add-name'),
                    'b_shortname' => $this->input->post('add-shortname'),
                    'b_company' => 'company'
                ];
        $co_bank = [
                    'co_b_no' => $this->input->post('add-acc-no'),
                    'co_b_class' => $this->input->post('add-classification'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $id = Co_Banks_Model::add($bank, $co_bank, $this->session->userdata('user'));
        echo json_encode($id);
	}

	public function add_bp_vat(){
		$data = [
					'co_bp_id' => $this->input->post('co_bp_id'),
					't_id' => $this->input->post('t_id'),
				];
		Co_Business_Partners_Model::add_bp_vat($data);
		echo json_encode($this->input->post('t_id'));
	}

	public function add_bp_ewt(){
		$data = [
					'co_bp_id' => $this->input->post('co_bp_id'),
					't_id' => $this->input->post('t_id'),
				];
		Co_Business_Partners_Model::add_bp_ewt($data);
		echo json_encode($this->input->post('t_id'));
	}

	public function add_bp_fwt(){
		$data = [
					'co_bp_id' => $this->input->post('co_bp_id'),
					't_id' => $this->input->post('t_id'),
				];
		Co_Business_Partners_Model::add_bp_fwt($data);
		echo json_encode($this->input->post('t_id'));
	}

	public function add_mop(){
		$data = [
                    'mop_name' => $this->input->post('add-name'),
                    'mop_shortname' => $this->input->post('add-shortname'),
                    'top_id' => $this->input->post('add-type'),
                    'mop_company' => 'company',
                ];
        $id = Co_Modes_Of_Payment_Model::add($data, $this->session->userdata('user'));
        echo json_encode($id);
	}

	public function add_bp(){
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

       $id = Co_Business_Partners_Model::add($data, $new_class, $bpc_code, $this->input->post('add-tax-1'), $this->input->post('add-tax-2'), $this->input->post('add-tax-3'), $this->session->userdata('user'));
		
		echo json_encode($id);
	}
}