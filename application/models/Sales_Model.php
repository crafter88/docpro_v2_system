<?php

class Sales_Model extends CI_Model{
	private static $db;

	function __construct(){
		self::$db = &get_instance()->db;
	}

	public static function get_journals_summary($user){
		$co_transaction = self::$db->from('co_transaction ct')->join('journals j', 'j.j_code = ct.co_journ_trans_id')->join('co_journals cj', 'cj.j_id=j.j_id')->join('co_business_partners cbp', 'cbp.co_bp_id = ct.co_trans_doc_bp_id')->join('business_partners_type bpt', 'bpt.bpt_id = cbp.bpt_id')->join('company_history ch', 'ch.ch_cb_id = ct.cb_id')->where(['ct.cb_id' => $user->main_company->cb_id, 'ct.co_journ_trans_id' => '1', 'cj.cb_id' => $user->main_company->cb_id, 'ch.flag' => '1'])->get()->result();

		foreach ($co_transaction as $key => &$value) {
			$value->bank_details_data = self::$db->from('co_trans_bank_details ctbd')->join('co_transaction ct', 'ct.co_trans_id = ctbd.co_trans_id')->join('co_banks cb', 'cb.co_b_id = ctbd.co_b_id')->join('banks b', 'b.b_id = cb.b_id')->where(['ctbd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->discounts_data = self::$db->from('co_trans_discounts ctd')->join('co_transaction ct', 'ct.co_trans_id = ctd.co_trans_id')->join('co_discounts cd', 'cd.co_d_id = ctd.co_d_id')->where(['ctd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->doc_reference_data = self::$db->from('co_trans_doc_reference ctdr')->join('co_transaction ct', 'ct.co_trans_id = ctdr.co_trans_id')->join('co_documents cd', 'cd.co_doc_id = ctdr.co_doc_id')->join('documents doc', 'doc.d_id = cd.d_id')->where(['ctdr.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->ewt_data = self::$db->from('co_trans_ewt cte')->join('co_transaction ct', 'ct.co_trans_id = cte.co_trans_id')->join('taxes t', 't.t_id = cte.t_id')->where(['cte.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->fwt_data = self::$db->from('co_trans_fwt ctf')->join('co_transaction ct', 'ct.co_trans_id = ctf.co_trans_id')->join('taxes t', 't.t_id = ctf.t_id')->where(['ctf.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->others_data = self::$db->from('co_trans_other cto')->join('co_transaction ct', 'ct.co_trans_id = cto.co_trans_id')->join('profiles p', 'p.p_id = cto.co_trans_preparedby_id')->where(['cto.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->prod_data = self::$db->from('co_trans_products ctp')->join('co_transaction ct', 'ct.co_trans_id = ctp.co_trans_id')->join('co_products cp', 'cp.co_p_id = ctp.co_p_id')->where(['ctp.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->serv_data = self::$db->from('co_trans_services cts')->join('co_transaction ct', 'ct.co_trans_id = cts.co_trans_id')->join('co_services cs', 'cs.co_s_id = cts.co_s_id')->where(['cts.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->vat_data = self::$db->from('co_trans_vat ctv')->join('co_transaction ct', 'ct.co_trans_id = ctv.co_trans_id')->join('taxes t', 't.t_id = ctv.t_id')->where(['ctv.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->je_data = self::$db->from('co_trans_journ_entry ctje')->join('co_transaction ct', 'ct.co_trans_id = ctje.co_trans_id')->join('coa coa', 'coa.coa_id=ctje.co_trans_je_acc_code')->join('co_profit_cost_centers copcc', 'copcc.co_pcc_id=ctje.co_trans_pcc_code')->join('co_departments codept', 'codept.co_de_id=ctje.co_trans_dept_code_name')->where(['ctje.co_trans_id' => $value->co_trans_id])->get()->result();
		}
		return $co_transaction;
	}

	public static function get_bp($user){
		$bp = self::$db->from('co_business_partners cbp')->join('business_partners_type bpt', 'bpt.bpt_id = cbp.bpt_id')->join('business_partners_class bpc', 'bpc.bpc_id=cbp.bpc_id')->where('cbp.cb_id', $user->main_company->cb_id)->where('cbp.flag', '1')->get()->result();

		foreach ($bp as $key => &$value) {
			$tax1 = self::$db->from('taxes t')->join('co_business_partners_vat cobpvat', 'cobpvat.t_id = t.t_id')->join('co_business_partners cbp', 'cbp.co_bp_id = cobpvat.co_bp_id')->where('cbp.co_bp_id', $value->co_bp_id)->get()->result();
			$value->tax_1 = count($tax1) > 0 ? $tax1[0]->t_code : '';

			$tax2 = self::$db->from('taxes t')->join('co_business_partners_ewt cobpewt', 'cobpewt.t_id = t.t_id')->join('co_business_partners cbp', 'cbp.co_bp_id = cobpewt.co_bp_id')->where('cbp.co_bp_id', $value->co_bp_id)->get()->result();
			$value->tax_2 = count($tax2) > 0 ? $tax2[0]->t_code : '';

			$tax3 = self::$db->from('taxes t')->join('co_business_partners_fwt cobpfwt', 'cobpfwt.t_id = t.t_id')->join('co_business_partners cbp', 'cbp.co_bp_id = cobpfwt.co_bp_id')->where('cbp.co_bp_id', $value->co_bp_id)->get()->result();
			$value->tax_3 = count($tax3) > 0 ? $tax3[0]->t_code : '';
		}
		return $bp;
	}

	public static function get_bp_transaction($bp_id, $user){
		$co_transaction = self::$db->from('co_transaction ct')->join('journals j', 'j.j_code = ct.co_journ_trans_id')->join('co_journals cj', 'cj.j_id=j.j_id')->join('co_business_partners cbp', 'cbp.co_bp_id = ct.co_trans_doc_bp_id')->join('business_partners_type bpt', 'bpt.bpt_id = cbp.bpt_id')->join('company_history ch', 'ch.ch_cb_id = ct.cb_id')->where(['ct.co_trans_doc_bp_id' => $bp_id, 'ct.cb_id' => $user->main_company->cb_id, 'ct.co_journ_trans_id' => '1', 'cj.cb_id' => $user->main_company->cb_id, 'ch.flag' => '1'])->get()->result();

		foreach ($co_transaction as $key => &$value) {
			$value->bank_details_data = self::$db->from('co_trans_bank_details ctbd')->join('co_transaction ct', 'ct.co_trans_id = ctbd.co_trans_id')->join('co_banks cb', 'cb.co_b_id = ctbd.co_b_id')->join('banks b', 'b.b_id = cb.b_id')->where(['ctbd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->discounts_data = self::$db->from('co_trans_discounts ctd')->join('co_transaction ct', 'ct.co_trans_id = ctd.co_trans_id')->join('co_discounts cd', 'cd.co_d_id = ctd.co_d_id')->where(['ctd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->doc_reference_data = self::$db->from('co_trans_doc_reference ctdr')->join('co_transaction ct', 'ct.co_trans_id = ctdr.co_trans_id')->join('co_documents cd', 'cd.co_doc_id = ctdr.co_doc_id')->join('documents doc', 'doc.d_id = cd.d_id')->where(['ctdr.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->ewt_data = self::$db->from('co_trans_ewt cte')->join('co_transaction ct', 'ct.co_trans_id = cte.co_trans_id')->join('taxes t', 't.t_id = cte.t_id')->where(['cte.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->fwt_data = self::$db->from('co_trans_fwt ctf')->join('co_transaction ct', 'ct.co_trans_id = ctf.co_trans_id')->join('taxes t', 't.t_id = ctf.t_id')->where(['ctf.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->others_data = self::$db->from('co_trans_other cto')->join('co_transaction ct', 'ct.co_trans_id = cto.co_trans_id')->join('profiles p', 'p.p_id = cto.co_trans_preparedby_id')->where(['cto.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->prod_data = self::$db->from('co_trans_products ctp')->join('co_transaction ct', 'ct.co_trans_id = ctp.co_trans_id')->join('co_products cp', 'cp.co_p_id = ctp.co_p_id')->where(['ctp.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->serv_data = self::$db->from('co_trans_services cts')->join('co_transaction ct', 'ct.co_trans_id = cts.co_trans_id')->join('co_services cs', 'cs.co_s_id = cts.co_s_id')->where(['cts.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->vat_data = self::$db->from('co_trans_vat ctv')->join('co_transaction ct', 'ct.co_trans_id = ctv.co_trans_id')->join('taxes t', 't.t_id = ctv.t_id')->where(['ctv.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->je_data = self::$db->from('co_trans_journ_entry ctje')->join('co_transaction ct', 'ct.co_trans_id = ctje.co_trans_id')->join('coa coa', 'coa.coa_id=ctje.co_trans_je_acc_code')->join('co_profit_cost_centers copcc', 'copcc.co_pcc_id=ctje.co_trans_pcc_code')->join('co_departments codept', 'codept.co_de_id=ctje.co_trans_dept_code_name')->where(['ctje.co_trans_id' => $value->co_trans_id])->get()->result();
		}
		return $co_transaction;
	}

	public static function get_bank($user){
		return self::$db->from('co_banks')->join('banks', 'banks.b_id = co_banks.b_id')->where(['co_banks.cb_id' => $user->main_company->cb_id, 'co_banks.flag' => '1', 'banks.flag' => '1'])->get()->result();
	}

	public static function get_product_service($user){
		$products = self::$db->from('co_products coprod')->join('co_departments codep', 'codep.co_de_id = coprod.co_de_id')->where('codep.cb_id', $user->main_company->cb_id)->where('coprod.flag', '1')->get()->result();
		// $services = self::$db->from('co_services coserv')->join('co_departments codep', 'codep.co_de_id = coserv.co_de_id')->where('codep.cb_id', $user->cb_id)->where('coserv.flag', '1')->get()->result();

		$data = [];
		foreach ($products as $key => $value) {
			array_push($data, ['id' => $value->co_p_id, 'code' => $value->co_p_code, 'name' => $value->co_p_name, 'shortname' => $value->co_p_shortname, 'description' => $value->co_p_description, 'pcc_id' => $value->co_pcc_id, 'de_id' => $value->co_de_id, 'cb_id' => $value->cb_id, 'type' => 'product']);
		}
		// foreach ($services as $key => $value) {
		// 	array_push($data, ['id' => $value->co_s_id, 'code' => $value->co_s_code, 'name' => $value->co_s_name, 'shortname' => $value->co_s_shortname, 'description' => $value->co_s_description, 'pcc_id' => $value->co_pcc_id, 'de_id' => $value->co_de_id, 'cb_id' => $value->cb_id, 'type' => 'service']);
		// }

		return $data;
	}

	public static function get_vat($user, $bp_id){
		return self::$db->from('taxes t')->join('tax_types tt', 'tt.tt_id=t.tt_id')->join('co_business_partners_vat cbpvat', 'cbpvat.t_id=t.t_id')->join('co_business_partners cbp', 'cbp.co_bp_id=cbpvat.co_bp_id')->where(['cbp.cb_id' => $user->main_company->cb_id, 'cbp.co_bp_id' => $bp_id, 't.flag' => '1', 'cbpvat.flag' => '1'])->get()->result();
	}

	public static function get_ewt($user, $bp_id){
		return self::$db->from('taxes t')->join('tax_types tt', 'tt.tt_id=t.tt_id')->join('co_business_partners_ewt cbpewt', 'cbpewt.t_id=t.t_id')->join('co_business_partners cbp', 'cbp.co_bp_id=cbpewt.co_bp_id')->where(['cbp.cb_id' => $user->main_company->cb_id, 'cbp.co_bp_id' => $bp_id, 't.flag' => '1', 'cbpewt.flag' => '1'])->get()->result();
	}

	public static function get_discount($user){
		return self::$db->where('cb_id', $user->main_company->cb_id)->where('flag', '1')->get('co_discounts')->result();
	}

	public static function get_fwt($user, $bp_id){
		return self::$db->from('taxes t')->join('tax_types tt', 'tt.tt_id=t.tt_id')->join('co_business_partners_fwt cbpfwt', 'cbpfwt.t_id=t.t_id')->join('co_business_partners cbp', 'cbp.co_bp_id=cbpfwt.co_bp_id')->where(['cbp.cb_id' => $user->main_company->cb_id, 'cbp.co_bp_id' => $bp_id, 't.flag' => '1', 'cbpfwt.flag' => '1'])->get()->result();
	}

	public static function get_doc_ref($user){
		return self::$db->from('documents d')->join('co_documents cd', 'd.d_id=cd.d_id')->join('journals j', 'j.j_id=d.j_id')->where(['d.flag' => '1', 'cd.cb_id' => $user->main_company->cb_id, 'j.j_code' => '1'])->get()->result();
	}

	public static function get_mop($user){
		return self::$db->from('modes_of_payment mop')->join('co_modes_of_payment cmop', 'cmop.mop_id = mop.mop_id')->where('cmop.cb_id', $user->main_company->cb_id)->where('cmop.flag', '1')->get()->result();
	}

	public static function je_account($user){
		return self::$db->from('coa')->join('co_coa cocoa', 'cocoa.coa_id=coa.coa_id')->where(['cocoa.cb_id' => $user->main_company->cb_id, 'coa.flag' => '1'])->get()->result();
	}

	public static function je_pcc($user){
		return self::$db->from('co_profit_cost_centers copcc')->join('co_departments codept', 'codept.co_de_id=copcc.co_de_id')->where(['codept.cb_id' => $user->main_company->cb_id, 'copcc.flag' => '1'])->get()->result();
	}

	public static function je_dept($user){
		return self::$db->get_where('co_departments codept', ['codept.cb_id' => $user->main_company->cb_id, 'codept.flag' => '1'])->result();
	}

	public static function save_trans($trans_data, $prod_data, $serv_data, $vat_data, $discount_data, $ewt_data, $fwt_data, $doc_ref_data, $bank_data, $other_details, $journal_entry_data){

		self::$db->insert('co_transaction', $trans_data);
		$trans_id = self::$db->insert_id();

		foreach ($prod_data as $key => $value) {
			self::$db->insert('co_trans_products', [
													'co_p_id' 					=> $value['co_p_id'],
													'co_trans_prod_qty' 		=> $value['co_trans_prod_qty'],
													'co_trans_prod_unit' 		=> $value['co_trans_prod_unit'],
													'co_trans_prod_unitprice' 	=> $value['co_trans_prod_unitprice'],
													'co_trans_prod_gross' 		=> $value['co_trans_prod_gross'],
													'co_trans_prod_type' 		=> $value['co_trans_prod_type'],
													'co_trans_id' 				=> $trans_id
													]);
		}

		foreach ($serv_data as $key => $value) {
			self::$db->insert('co_trans_services', [
													'co_s_id' 					=> $value['co_s_id'],
													'co_trans_serv_qty' 		=> $value['co_trans_serv_qty'],
													'co_trans_serv_unit' 		=> $value['co_trans_serv_unit'],
													'co_trans_serv_unitprice' 	=> $value['co_trans_serv_unitprice'],
													'co_trans_serv_gross' 		=> $value['co_trans_serv_gross'],
													'co_trans_serv_type' 		=> $value['co_trans_serv_type'],
													'co_trans_id' 				=> $trans_id
													]);
		}

		foreach ($vat_data as $key => $value) {
			self::$db->insert('co_trans_vat', [
												't_id'					=> $value['t_id'],
												'co_trans_vat_nature'		=> $value['co_trans_vat_nature'],
												'co_trans_vat_amount'		=> $value['co_trans_vat_amount'],
												'co_trans_vat_net_amount' 	=> $value['co_trans_vat_net_amount'],
												'co_trans_vat_gross'		=> $value['co_trans_vat_gross'],
												'co_trans_id'				=> $trans_id
											]);
		}

		foreach ($discount_data as $key => $value) {
			self::$db->insert('co_trans_discounts', [
														'co_d_id' 					=> $value['co_d_id'],
														'co_trans_disc_nature'		=> $value['co_trans_disc_nature'],
														'co_trans_disc_deduction'	=> $value['co_trans_disc_deduction'],
														'co_trans_disc_scid'		=> $value['co_trans_disc_scid'],
														'co_trans_id'				=> $trans_id,
													]);
		}

		foreach ($ewt_data as $key => $value) {
			self::$db->insert('co_trans_ewt', [
												't_id' 						=> $value['t_id'],
												'co_trans_ewt_nature' 			=> $value['co_trans_ewt_nature'],
												'co_trans_ewt_taxwithheld' 		=> $value['co_trans_ewt_taxwithheld'],
												'co_trans_id' 					=> $trans_id
												]);
		}

		foreach ($fwt_data as $key => $value) {
			self::$db->insert('co_trans_fwt', [
												't_id'						=> $value['t_id'],
												'co_trans_fwt_nature' 			=> $value['co_trans_fwt_nature'],
												'co_trans_fwt_taxwithheld'		=> $value['co_trans_fwt_taxwithheld'],
												'co_trans_id' 					=> $trans_id
											]);
		}

		foreach ($doc_ref_data as $key => $value) {
			self::$db->insert('co_trans_doc_reference', [
															'co_doc_id' 				=> $value['co_doc_id'],
															'co_trans_doc_ref_no' 		=> $value['co_trans_doc_ref_no'],
															'co_trans_doc_docdate' 		=> $value['co_trans_doc_docdate'],
															'co_trans_doc_gross' 		=> $value['co_trans_doc_gross'],
															'co_trans_doc_netamount' 	=> $value['co_trans_doc_netamount'],
															'co_trans_id' 				=> $trans_id,
														]);
		}

		foreach ($bank_data as $key => $value) {
			self::$db->insert('co_trans_bank_details', [
															'co_b_id' 					=> $value['co_b_id'],
															'co_trans_bank_det_doc' 	=> $value['co_trans_bank_det_doc'],
															'co_trans_bank_det_amount' 	=> $value['co_trans_bank_det_amount'],
															'co_trans_bank_det_date' 	=> $value['co_trans_bank_det_date'],
															'co_trans_id' 				=> $trans_id,
													]);
		}

		self::$db->insert('co_trans_other', [
												'co_trans_preparedby_id' 	=> $other_details['co_trans_preparedby_id'],
												'co_trans_verifiedby' 		=> $other_details['co_trans_verifiedby'],
												'co_trans_approvedby' 		=> $other_details['co_trans_approvedby'],
												'co_trans_receivedby' 		=> $other_details['co_trans_receivedby'],
												'co_trans_id'				=> $trans_id,
											]);

		foreach ($journal_entry_data as $key => $value) {
			self::$db->insert('co_trans_journ_entry', [
															'co_trans_je_no' => $value['co_trans_je_no'],
															'co_trans_je_trans_code' => $value['co_trans_je_trans_code'],
															'co_trans_je_seq_no' => $value['co_trans_je_seq_no'],
															'co_trans_je_acc_code' => $value['co_trans_je_acc_code'] ? $value['co_trans_je_acc_code'] : '0',
															'co_trans_je_acc_name' => $value['co_trans_je_acc_name'],
															'co_trans_je_debit_credit' => $value['co_trans_je_debit_credit'],
															'co_trans_je_debit_amount' => $value['co_trans_je_debit_amount'],
															'co_trans_je_credit_amount' => $value['co_trans_je_credit_amount'],
															'co_trans_pcc_code' => $value['co_trans_pcc_code'] ? $value['co_trans_pcc_code'] : '0',
															'co_trans_dept_code_name' => $value['co_trans_dept_code_name'] ? $value['co_trans_dept_code_name'] : '0',
															'co_trans_id' => $trans_id,
													]);
		}

	}

	public static function save_trans_upload($transactions, $cb_id, $p_id){
		foreach ($transactions as $key => $value) {
			$transaction_id = null;
			$co_trans_doc_name = self::$db->from('journals j')->join('co_journals coj', 'coj.j_id = j.j_id')->where('coj.co_j_id', $value['document'][2])->get()->result()[0]->j_name;

			$document = [
							'co_trans_date' 					=> date('Y-m-d', strtotime($value['document'][1])),
							'co_journ_trans_id' 				=> $value['document'][2],
							'co_trans_doc_name' 				=> $co_trans_doc_name,
							'co_trans_doc_no' 					=> $value['document'][3],
							'co_trans_doc_date' 				=> date('Y-m-d', strtotime($value['document'][4])),
							'co_trans_doc_bp_id' 				=> $value['document'][5],
							'co_trans_doc_part_period' 			=> $value['document'][6],
							'co_trans_doc_part_remarks' 		=> $value['document'][7],
							'co_trans_doc_pay_type' 			=> $value['document'][8],
							'co_trans_doc_pay_terms'			=> $value['document'][9],
							'co_trans_doc_pay_duedate' 			=> $value['document'][10],
							'co_trans_doc_pay_mode_id'			=> $value['document'][11],
							'co_trans_doc_pay_amountpaid' 		=> $value['document'][12],
							'co_trans_doc_pay_checknumber' 		=> $value['document'][13],
							'co_trans_doc_pay_bank_id' 			=> $value['document'][14],
							'co_trans_doc_amount_gross' 		=> $value['document'][15],
							'co_trans_doc_amount_vat' 			=> $value['document'][16],
							'co_trans_doc_amount_taxwithheld' 	=> $value['document'][17],
							'co_trans_doc_amount_deduction' 	=> $value['document'][18],
							'co_trans_doc_amount_netamount' 	=> ((floatval($value['document'][15]) - floatval($value['document'][17])) / floatval($value['document'][16])) + floatval($value['document'][18]),
							'co_trans_doc_variance_gross' 		=> '',
							'co_trans_doc_variance_vat' 		=> '',
							'co_trans_doc_variance_taxwithheld' => '',
							'co_trans_doc_variance_deduction' 	=> '',
							'co_trans_doc_variance_netamount' 	=> '',
							'cb_id' 							=> $cb_id,
						];
			// self::$db->insert('co_transaction', $document);
			// $transaction_id = self::$db->insert_id();

			// foreach ($variable as $key => $value) {
			// 	# code...
			// }
			$prod = [
						'co_p_id' 					=> $value['products'][1],
						'co_trans_prod_qty' 		=> $value['products'][2],
						'co_trans_prod_unit' 		=> $value['products'][3],
						'co_trans_prod_unitprice' 	=> $value['products'][4],
						'co_trans_prod_gross' 		=> $value['products'][5],
						'co_trans_prod_type' 		=> 'product',
						'co_trans_id' 				=> ''
					];

			$service = [
							'co_s_id' 					=> $value['services'][1],
							'co_trans_serv_qty' 		=> '',
							'co_trans_serv_unit' 		=> '',
							'co_trans_serv_unitprice' 	=> '',
							'co_trans_serv_gross' 		=> '',
							'co_trans_serv_type' 		=> '',
							'co_trans_id' 				=> ''
						];

			$vat = [
						'co_t_id'					=> $value['vat'][1],
						'co_trans_vat_nature'		=> $value['vat'][2], 
						'co_trans_vat_amount'		=> $value['vat'][3],
						'co_trans_vat_net_amount' 	=> $value['vat'][4], 
						'co_trans_vat_gross'		=> $value['vat'][5], 
						'co_trans_id'				=> ''
					];

			$discount = [
							'co_d_id' 					=> $value['discounts'][1],
							'co_trans_disc_nature'		=> $value['discounts'][2],
							'co_trans_disc_deduction'	=> $value['discounts'][3],
							'co_trans_disc_scid'		=> $value['discounts'][4],
							'co_trans_id'				=> '',
						];

			$ewt = [
						'co_t_id' 						=> $value['ewt'][1],
						'co_trans_ewt_nature' 			=> $value['ewt'][2],
						'co_trans_ewt_taxwithheld' 		=> $value['ewt'][3],
						'co_trans_id' 					=> ''
					];

			$fwt = [
						'co_t_id'						=> $value['fwt'][1],
						'co_trans_fwt_nature' 			=> $value['fwt'][2],
						'co_trans_fwt_taxwithheld'		=> $value['fwt'][3],
						'co_trans_id' 					=> ''
					];

			$doc_ref = [
							'co_doc_id' 				=> $value['doc_ref'][1],
							'co_trans_doc_ref_no' 		=> $value['doc_ref'][2],
							'co_trans_doc_docdate' 		=> date('Y-m-d', strtotime($value['document'][4])),
							'co_trans_doc_gross' 		=> $value['document'][15],
							'co_trans_doc_netamount' 	=> ((floatval($value['document'][15]) - floatval($value['document'][17])) / floatval($value['document'][16])) + floatval($value['document'][18]),
							'co_trans_id' 				=> '',
						];

			$bank = [
						'co_b_id' 					=> $value['bank_det'][1],
						'co_trans_bank_det_doc' 	=> $value['bank_det'][2],
						'co_trans_bank_det_amount' 	=> $value['bank_det'][3],
						'co_trans_bank_det_date' 	=> $value['bank_det'][4],
						'co_trans_id' 				=> '',
					];

			$other = [
						'co_trans_preparedby_id' 	=> $p_id,
						'co_trans_verifiedby' 		=> $value['other_det'][1],
						'co_trans_approvedby' 		=> $value['other_det'][2],
						'co_trans_receivedby' 		=> $value['other_det'][3],
						'co_trans_id'				=> '',
					];

			$journal_entry = [
								'co_trans_je_no' 			=> $value['journ_entries'][1],
								'co_trans_je_trans_code'	=> $value['journ_entries'][2],
								'co_trans_je_seq_no' 		=> $value['journ_entries'][3],
								'co_trans_je_acc_code' 		=> $value['journ_entries'][4],
								'co_trans_je_acc_name' 		=> $value['journ_entries'][5],
								'co_trans_je_debit_credit' 	=> $value['journ_entries'][6],
								'co_trans_je_debit_amount' 	=> $value['journ_entries'][7],
								'co_trans_je_credit_amount' => $value['journ_entries'][8],
								'co_trans_pcc_code' 		=> $value['journ_entries'][9],
								'co_trans_dept_code_name' 	=> $value['journ_entries'][10],
								'co_trans_id' 				=> '',

							];
		}
	}

	// ADDITIONAL
	public static function last_trans_id($user){
		$last_record = self::$db->from('co_transaction')->where(['cb_id' => $user->branch_company->cb_id])->order_by('co_trans_id', 'desc')->get()->result();
		return count($last_record) > 0 ? floatval($last_record[0]->co_trans_id) : 0;
	}
	public static function last_journ_trans_id($user, $j_id){
		$last_record = self::$db->from('co_transaction')->where(['cb_id' => $user->branch_company->cb_id, 'co_journ_trans_id' => $j_id])->order_by('co_journ_trans_count', 'desc')->get()->result();
		return count($last_record) > 0 ? floatval($last_record[0]->co_journ_trans_count) : 0;
	}
}