<?php

class Purchases extends MY_Controller{
	
	function __construct(){
		parent::__construct('master_layout');
	}
	
	public function get_purchases_journal(){
		return $this->load->view($this->layout,  ['head_css'=>'fragments/head_css/journals/journals', 
													'top_navbar'=>'fragments/top_navbar/global_top_navbar', 
													'content'=>'fragments/content/journals/purchases_journal', 
													'footer_js'=>'fragments/footer_js/journals/purchases_journal', 
													'back_button'=>'home', 
													'title'=>'Purchases Journal', 
													'active_nav'=>'journals',
													'user'=>$this->session->userdata('user'),
													'journal_type'=>'purchases',
													'summary'=>'fragments/content/journals/parts/summary',
													'business_partners'=>'fragments/content/journals/parts/business_partners',
													'transaction'=>'fragments/content/journals/parts/new_transaction_purchases',
													'document'=>'fragments/content/journals/parts/invoice',
												]);
	}

	public function get_journals_summary(){
		echo json_encode(['data' => Purchases_Model::get_journals_summary($this->session->userdata('user'))]);
	}

	public function get_bp(){
		echo json_encode(['data' => Purchases_Model::get_bp($this->session->userdata('user'))]);
	}

	public function get_bp_transaction(){
		echo json_encode(['data' => Purchases_Model::get_bp_transaction($this->input->get('bp_id'), $this->session->userdata('user'))]);
	}

	public function transaction_bp(){
		echo json_encode(Purchases_Model::get_bp($this->session->userdata('user')));
	}

	public function transaction_bank(){
		echo json_encode(Purchases_Model::get_bank($this->session->userdata('user')));
	}

	public function transaction_product_service(){
		echo json_encode(Purchases_Model::get_product_service($this->session->userdata('user')));
	}

	public function transaction_vat(){
		$bp_id = $this->input->get('id');
		echo json_encode(Purchases_Model::get_vat($this->session->userdata('user'), $bp_id));
	}

	public function transaction_discount(){
		echo json_encode(Purchases_Model::get_discount($this->session->userdata('user')));
	}

	public function transaction_ewt(){
		$bp_id = $this->input->get('id');
		echo json_encode(Purchases_Model::get_ewt($this->session->userdata('user'), $bp_id));
	}

	public function transaction_fwt(){
		$bp_id = $this->input->get('id');
		echo json_encode(Purchases_Model::get_fwt($this->session->userdata('user'), $bp_id));
	}

	public function transaction_doc_ref(){
		echo json_encode(Purchases_Model::get_doc_ref($this->session->userdata('user')));
	}

	public function transaction_mop(){
		echo json_encode(Purchases_Model::get_mop($this->session->userdata('user')));
	}

	public function je_account(){
		echo json_encode(Purchases_Model::je_account($this->session->userdata('user')));
	}

	public function je_pcc(){
		echo json_encode(Purchases_Model::je_pcc($this->session->userdata('user')));
	}

	public function je_dept(){
		echo json_encode(Purchases_Model::je_dept($this->session->userdata('user')));
	}

	private function _process_upload($document, $products, $services, $vat, $discounts, $ewt, $fwt, $doc_ref, $bank_det, $other_det, $journ_entries){
		if(count($document) > 0) {
			// echo json_encode([
			// 					'document' 	=> $document, 
			// 					'products' 	=> $products, 
			// 					'services' 	=> $services,
			// 					'vat'		=> $vat,
			// 					'discounts'	=> $discounts,
			// 					'ewt'		=> $ewt,
			// 					'fwt'		=> $fwt,
			// 					'doc_ref'	=> $doc_ref,
			// 					'bank_det'	=> $bank_det,
			// 					'other_det'	=> $other_det,
			// 					'journ_entries'	=> $journ_entries
			// 				]);

			$transactions = [];
			foreach ($document as $key => &$value) {
				array_push($transactions, ['document' => $value]);

				$transactions[$key]['products'] = [];
				foreach ($products as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['products'], $value1);
					}
				}

				$transactions[$key]['services'] = [];
				foreach ($services as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['services'], $value1);
					}
				}

				$transactions[$key]['vat'] = [];
				foreach ($vat as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['vat'], $value1);
					}
				}

				$transactions[$key]['discounts'] = [];
				foreach ($discounts as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['discounts'], $value1);
					}
				}

				$transactions[$key]['ewt'] = [];
				foreach ($ewt as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['ewt'], $value1);
					}
				}

				$transactions[$key]['fwt'] = [];
				foreach ($fwt as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['fwt'], $value1);
					}
				}

				$transactions[$key]['doc_ref'] = [];
				foreach ($doc_ref as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['doc_ref'], $value1);
					}
				}

				$transactions[$key]['bank_det'] = [];
				foreach ($bank_det as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['bank_det'], $value1);
					}
				}

				$transactions[$key]['bank_det'] = [];
				foreach ($bank_det as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['bank_det'], $value1);
					}
				}

				$transactions[$key]['other_det'] = [];
				foreach ($other_det as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['other_det'], $value1);
					}
				}

				$transactions[$key]['journ_entries'] = [];
				foreach ($journ_entries as $key1 => $value1) {
					if($value1[0] === $value[0]){
						array_push($transactions[$key]['journ_entries'], $value1);
					}
				}
			}
			Save_Model::save_trans_upload($transaction, $this->session->userdata('user')->cb_id, $this->session->userdata('user')->p_id);
			echo json_encode($transactions);
		}else{
			return json_encode(['status' => 'fail', 'message' => 'No Document Found']);
		}
	}

	public function save_purchase_trans_upload(){
		$document = [];
		$products = [];
		$services = [];
		$vat = [];
		$discounts = [];
		$ewt = [];
		$fwt = [];
		$doc_ref = [];
		$bank_det = [];
		$other_det = [];
		$journ_entries = [];
		$flag = null;
	 	if($_FILES["file"]["size"] > 0){
		 	$filename=$_FILES["file"]["tmp_name"];
		  	$file = fopen($filename, "r");
     	 	while (($emapData = fgetcsv($file, 10000, "\r")) !== FALSE){
	    		foreach ($emapData as $key => $value) {
	    			$item = str_getcsv($value, ",", '"');
					
					if($flag !== null){
						if ($item[0] !== "") {
							if(!(in_array(strtoupper($item['0']), ['DOCUMENT', 'PRODUCTS', 'SERVICES', 'VAT', 'DISCOUNTS', 'EWT', 'FWT', 'DOCUMENT REFERENCE', 'BANK DETAILS', 'OTHER DETAILS', 'JOURNAL ENTRIES']))) {

								if($flag === 'document'){
									array_push($document, $item);
								}
								if($flag === 'products' && $item[0] !== ""){
									array_push($products, $item);
								}
								if($flag === 'services' && $item[0] !== ""){
									array_push($services, $item);
								}
								if($flag === 'vat' && $item[0] !== ""){
									array_push($vat, $item);
								}
								if($flag === 'discounts' && $item[0] !== ""){
									array_push($discounts, $item);
								}
								if($flag === 'ewt' && $item[0] !== ""){
									array_push($ewt, $item);
								}
								if($flag === 'fwt' && $item[0] !== ""){
									array_push($fwt, $item);
								}
								if($flag === 'document reference' && $item[0] !== ""){
									array_push($doc_ref, $item);
								}
								if($flag === 'bank details' && $item[0] !== ""){
									array_push($bank_det, $item);
								}
								if($flag === 'other details' && $item[0] !== ""){
									array_push($other_det, $item);
								}
								if($flag === 'journal entries' && $item[0] !== ""){
									array_push($journ_entries, $item);
								}
							}
						}
					}

					if(strtoupper($item[0]) === strtoupper('Document')){
						$flag = 'document';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Products')){
						$flag = 'products';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Services')){
						$flag = 'services';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('VAT')){
						$flag = 'vat';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Discounts')){
						$flag = 'discounts';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('EWT')){
						$flag = 'ewt';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('FWT')){
						$flag = 'fwt';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Document Reference')){
						$flag = 'document reference';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Bank Details')){
						$flag = 'bank details';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Other Details')){
						$flag = 'other details';
						continue;
					}else if(strtoupper($item[0]) === strtoupper('Journal Entries')){
						$flag = 'journal entries';
						continue;
					}else{
						continue;	
					}

	    			array_push($data, $item);
	    		}
	        }
	        fclose($file);
		}

		$this->_process_upload($document, $products, $services, $vat, $discounts, $ewt, $fwt, $doc_ref, $bank_det, $other_det, $journ_entries);
	}

	public function save_purchase_trans(){
		$trans_data = [
					'co_trans_date' 					=> date('Y-m-d', strtotime($this->input->post('trans_date'))),
					'co_journ_trans_count' 				=> $this->input->post('journal_transaction_count'),
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
					'cb_id' 							=> $this->session->userdata('user')->main_company->cb_id,
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
									't_id'					=> $value,
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
										't_id' 						=> $value,
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
										't_id'						=> $value,
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
		Purchases_Model::save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data);
		return redirect('journals/purchases', 'refresh');
	}

	// ADDITIONAL

	public function last_trans_id(){
		echo json_encode(Purchases_Model::last_trans_id($this->session->userdata('user')));
	}
	public function last_journ_trans_id(){
		echo json_encode(Purchases_Model::last_journ_trans_id($this->session->userdata('user'), $this->input->get('id')));
	}

}