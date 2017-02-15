<?php

class Transactions extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
		if(!($this->session->userdata('logged_in'))) redirect('login');
	}
	
	public function get_transactions(){
		return $this->load->view($this->layout, ['head_css'=>'fragments/head_css/transactions', 'top_navbar'=>'fragments/top_navbar/global_top_navbar', 'content'=>'fragments/content/transactions', 'footer_js'=>'fragments/footer_js/transactions', 'back_button'=>'home', 'title'=>'Transactions', 'active_nav'=>'2', 'user'=>$this->session->userdata('user')]);
	}

	public function get_journals_summary(){
		echo json_encode(['data' => Transactions_Model::get_journals_summary($this->session->userdata('user'))]);
	}

	public function get_bp(){
		echo json_encode(['data' => Transactions_Model::get_bp($this->session->userdata('user'))]);
	}

	public function get_bp_transaction(){
		echo json_encode(['data' => Transactions_Model::get_bp_transaction($this->input->get('bp_id'), $this->session->userdata('user'))]);
	}

	public function transaction_bp(){
		echo json_encode(Transactions_Model::get_bp($this->session->userdata('user')));
	}

	public function transaction_bank(){
		echo json_encode(Transactions_Model::get_bank($this->session->userdata('user')));
	}

	public function transaction_product_service(){
		echo json_encode(Transactions_Model::get_product_service($this->session->userdata('user')));
	}

	public function transaction_vat(){
		echo json_encode(Transactions_Model::get_vat($this->session->userdata('user')));
	}

	public function transaction_discount(){
		echo json_encode(Transactions_Model::get_discount($this->session->userdata('user')));
	}

	public function transaction_ewt(){
		echo json_encode(Transactions_Model::get_ewt($this->session->userdata('user')));
	}

	public function transaction_fwt(){
		echo json_encode(Transactions_Model::get_fwt($this->session->userdata('user')));
	}

	public function transaction_doc_ref(){
		echo json_encode(Transactions_Model::get_doc_ref($this->session->userdata('user')));
	}

	public function transaction_mop(){
		echo json_encode(Transactions_Model::get_mop($this->session->userdata('user')));
	}

	public function save_trans(){
		$trans_data = [
					'co_trans_date' 					=> date('Y-m-d', strtotime($this->input->post('trans_date'))),
					'co_journ_trans_id' 				=> $this->input->post('journal_transaction_id'),
					'co_trans_doc_name' 				=> $this->input->post('doc_name'),
					'co_trans_doc_no' 					=> $this->input->post('doc_number'),
					'co_trans_doc_date' 				=> $this->input->post('doc_date'),
					'co_trans_doc_bp_id' 				=> $this->input->post('bp_id'),
					'co_trans_doc_part_period' 			=> $this->input->post('particulars_period'),
					'co_trans_doc_part_remarks' 		=> $this->input->post('particulars_remark'),
					'co_trans_doc_pay_type' 			=> $this->input->post('payment_type'),
					'co_trans_doc_pay_terms'			=> $this->input->post('payment_term'),
					'co_trans_doc_pay_duedate' 			=> date('Y-m-d', strtotime($this->input->post('payment_due_date'))),
					'co_trans_doc_pay_mode_id'			=> $this->input->post('payment_mode_id'),
					'co_trans_doc_pay_amountpaid' 		=> $this->input->post('payment_amount_paid'),
					'co_trans_doc_pay_checknumber' 		=> $this->input->post('payment_check_number'),
					'co_trans_doc_pay_bank_id' 			=> $this->input->post('payment_bank_id'),
					'co_trans_doc_amount_gross' 		=> $this->input->post('amounts_gross_amount'),
					'co_trans_doc_amount_vat' 			=> $this->input->post('amounts_vat'),
					'co_trans_doc_amount_taxwithheld' 	=> $this->input->post('amounts_tax_withheld'),
					'co_trans_doc_amount_deduction' 	=> $this->input->post('amounts_deductions'),
					'co_trans_doc_amount_netamount' 	=> $this->input->post('amounts_net_amount'),
					'co_trans_doc_variance_gross' 		=> $this->input->post('variance_gross_amount'),
					'co_trans_doc_variance_vat' 		=> $this->input->post('variance_vat'),
					'co_trans_doc_variance_taxwithheld' => $this->input->post('variance_tax_withheld'),
					'co_trans_doc_variance_deduction' 	=> $this->input->post('variance_deductions'),
					'co_trans_doc_variance_netamount' 	=> $this->input->post('variance_net_amount'),
					'cb_id' 							=> $this->session->userdata('user')->cb_id,
		];

		$prod_data = [];
		$serv_data = [];
		$prod_serv = $this->input->post('product_service_id');
		foreach ($prod_serv as $key => $value) {
			if(strlen($value) > 0){
				if($this->input->post('product_service_type')[$key] === 'product'){
					array_push($prod_data, [
												'co_p_id' 				=> $value,
												'co_trans_prod_qty' 		=> $this->input->post('product_services_qty')[$key],
												'co_trans_prod_unit' 		=> $this->input->post('product_services_unit')[$key],
												'co_trans_prod_unitprice' 	=> $this->input->post('product_services_unit_price')[$key],
												'co_trans_prod_gross' 		=> $this->input->post('product_services_gross_amount')[$key],
												'co_trans_prod_type' 		=> $this->input->post('product_service_type')[$key],
												'co_trans_id' 					=> ''
											]);
				}else{
					array_push($serv_data, [
												'co_s_id' 				=> $value,
												'co_trans_serv_qty' 		=> $this->input->post('product_services_qty')[$key],
												'co_trans_serv_unit' 		=> $this->input->post('product_services_unit')[$key],
												'co_trans_serv_unitprice' 	=> $this->input->post('product_services_unit_price')[$key],
												'co_trans_serv_gross' 		=> $this->input->post('product_services_gross_amount')[$key],
												'co_trans_serv_type' 		=> $this->input->post('product_service_type')[$key],
												'co_trans_id' 					=> ''
											]);
				}
			}
		}

		$vat_data = [];
		$vat = $this->input->post('vat_id');
		foreach ($vat as $key => $value) {
			if(strlen($value) > 0){
				array_push($vat_data, [
									'co_t_id'					=> $value,
									'co_trans_vat_nature'		=> $this->input->post('vat_nature')[$key], 
									'co_trans_vat_amount'		=> $this->input->post('vat_amount')[$key],
									'co_trans_vat_net_amount' 	=> $this->input->post('vat_net_vat_amount')[$key],
									'co_trans_vat_gross'		=> $this->input->post('vat_gross_amount')[$key],
									'co_trans_id'				=> ''
									]);
			}
		}

		$discount_data = [];
		$discount = $this->input->post('discount_id');
		foreach($discount as $key => $value){
			if(strlen($value) > 0){
				array_push($discount_data, [
											'co_d_id' 					=> $value,
											'co_trans_disc_nature'		=> $this->input->post('discount_nature')[$key],
											'co_trans_disc_deduction'	=> $this->input->post('discount_deduction')[$key],
											'co_trans_disc_scid'		=> $this->input->post('discount_sc_id')[$key],
											'co_trans_id'				=> '',
										]);
			}
		}

		$ewt_data = [];
		$ewt = $this->input->post('ewt_id');
		foreach ($ewt as $key => $value) {
			if(strlen($value) > 0){
				array_push($ewt_data, [
										'co_t_id' 						=> $value,
										'co_trans_ewt_nature' 			=> $this->input->post('ewt_nature')[$key],
										'co_trans_ewt_taxwithheld' 		=> $this->input->post('ewt_tax_withheld')[$key],
										'co_trans_id' 					=> ''
									]);
			}
		}

		$fwt_data = [];
		$fwt = $this->input->post('fwt_id');
		foreach ($fwt as $key => $value) {
			if(strlen($value) > 0){
				array_push($fwt_data, [
										'co_t_id'						=> $value,
										'co_trans_fwt_nature' 			=> $this->input->post('fwt_nature')[$key],
										'co_trans_fwt_taxwithheld'		=> $this->input->post('fwt_tax_withheld')[$key],
										'co_trans_id' 					=> ''
									]);
			}
		}

		$doc_ref_data = [];
		$doc_ref = $this->input->post('doc_ref_doc_id');
		foreach ($doc_ref as $key => $value) {
			if(strlen($value) > 0){
				array_push($doc_ref_data, [
										'co_doc_id' 				=> $value,
										'co_trans_doc_ref_no' 		=> $this->input->post('doc_ref_doc_number')[$key],
										'co_trans_doc_docdate' 		=> date('Y-m-d', strtotime($this->input->post('doc_ref_doc_date')[$key])),
										'co_trans_doc_gross' 		=> $this->input->post('doc_ref_doc_gross_amount')[$key],
										'co_trans_doc_netamount' 	=> $this->input->post('doc_ref_doc_net_amount')[$key],
										'co_trans_id' 				=> '',
										]);
			}
		}

		$bank_data = [];
		$bank = $this->input->post('bank_id');
		foreach ($bank as $key => $value) {
			if(strlen($value) > 0){
				array_push($bank_data, [
										'co_b_id' 					=> $value,
										'co_trans_bank_det_doc' 	=> $this->input->post('bank_document')[$key],
										'co_trans_bank_det_amount' 	=> $this->input->post('bank_amount')[$key],
										'co_trans_bank_det_date' 	=> $this->input->post('bank_date')[$key],
										'co_trans_id' 				=> '',
									]);
			}
		}

		$other_details = [
							'co_trans_preparedby_id' 	=> $this->input->post('other_preparedby_id'),
							'co_trans_verifiedby' 		=> $this->input->post('verified_by'),
							'co_trans_approvedby' 		=> $this->input->post('approved_by'),
							'co_trans_receivedby' 		=> $this->input->post('received_by'),
							'co_trans_id'				=> '',
						];

		$journal_entry_data = [];
		$journal_entry = $this->input->post('je_number');
		foreach ($journal_entry as $key => $value) {
			if(strlen($value) > 0){
				array_push($journal_entry_data, [
													'co_trans_je_no' => $value,
													'co_trans_je_trans_code' => $this->input->post('je_trans_code')[$key],
													'co_trans_je_seq_no' => $this->input->post('je_seq_num')[$key],
													'co_trans_je_acc_code' => $this->input->post('je_acc_code')[$key],
													'co_trans_je_acc_name' => $this->input->post('je_acc_name')[$key],
													'co_trans_je_debit_credit' => $this->input->post('je_debit_credit')[$key],
													'co_trans_je_debit_amount' => $this->input->post('je_debit_amount')[$key],
													'co_trans_je_credit_amount' => $this->input->post('je_credit_amount')[$key],
													'co_trans_pcc_code' => $this->input->post('je_pcc_code')[$key],
													'co_trans_dept_code_name' => $this->input->post('je_dept_code')[$key],
													'co_trans_id' => '',

												]);
			}
		}
		if($this->input->post('journal_transaction_id') === '1'){
			Sales_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}else if($this->input->post('journal_transaction_id') === '2'){
			Purchases_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}else if($this->input->post('journal_transaction_id') === '3'){
			Receipts_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}else if($this->input->post('journal_transaction_id') === '4'){
			Collections_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}else if($this->input->post('journal_transaction_id') === '5'){
			Disbursements_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}else if($this->input->post('journal_transaction_id') === '7'){
			Adjustments_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}else{
			Specials_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		}																																			
		
		return redirect('transactions');
	}


}