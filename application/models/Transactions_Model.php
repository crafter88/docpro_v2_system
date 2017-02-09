<?php

class Transactions_Model extends CI_Model{
	private static $db;

	function __construct(){
		self::$db = &get_instance()->db;
	}

	public static function get_journals_summary($user){
		$co_transaction = self::$db->from('co_transaction ct')->join('journals j', 'j.j_code = ct.co_journ_trans_id')->join('co_journals cj', 'cj.j_id=j.j_id')->join('co_business_partners cbp', 'cbp.co_bp_id = ct.co_trans_doc_bp_id')->join('business_partners_type bpt', 'bpt.bpt_id = cbp.bpt_id')->join('company_history ch', 'ch.ch_cb_id = ct.cb_id')->where(['ct.cb_id' => $user->main_company->cb_id, 'cj.cb_id' => $user->main_company->cb_id, 'ch.flag' => '1'])->get()->result();

		foreach ($co_transaction as $key => &$value) {
			$value->bank_details_data = self::$db->from('co_trans_bank_details ctbd')->join('co_transaction ct', 'ct.co_trans_id = ctbd.co_trans_id')->join('co_banks cb', 'cb.co_b_id = ctbd.co_b_id')->join('banks b', 'b.b_id = cb.b_id')->where(['ctbd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->discounts_data = self::$db->from('co_trans_discounts ctd')->join('co_transaction ct', 'ct.co_trans_id = ctd.co_trans_id')->join('co_discounts cd', 'cd.co_d_id = ctd.co_d_id')->where(['ctd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->doc_reference_data = self::$db->from('co_trans_doc_reference ctdr')->join('co_transaction ct', 'ct.co_trans_id = ctdr.co_trans_id')->join('co_documents cd', 'cd.co_doc_id = ctdr.co_doc_id')->where(['ctdr.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->ewt_data = self::$db->from('co_trans_ewt cte')->join('co_transaction ct', 'ct.co_trans_id = cte.co_trans_id')->join('taxes t', 't.t_id = cte.t_id')->where(['cte.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->fwt_data = self::$db->from('co_trans_fwt ctf')->join('co_transaction ct', 'ct.co_trans_id = ctf.co_trans_id')->join('taxes t', 't.t_id = ctf.t_id')->where(['ctf.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->others_data = self::$db->from('co_trans_other cto')->join('co_transaction ct', 'ct.co_trans_id = cto.co_trans_id')->join('profiles p', 'p.p_id = cto.co_trans_preparedby_id')->where(['cto.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->prod_data = self::$db->from('co_trans_products ctp')->join('co_transaction ct', 'ct.co_trans_id = ctp.co_trans_id')->join('co_products cp', 'cp.co_p_id = ctp.co_p_id')->where(['ctp.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->serv_data = self::$db->from('co_trans_services cts')->join('co_transaction ct', 'ct.co_trans_id = cts.co_trans_id')->join('co_services cs', 'cs.co_s_id = cts.co_s_id')->where(['cts.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->vat_data = self::$db->from('co_trans_vat ctv')->join('co_transaction ct', 'ct.co_trans_id = ctv.co_trans_id')->join('taxes t', 't.t_id = ctv.t_id')->where(['ctv.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->je_data = self::$db->from('co_trans_journ_entry ctje')->join('co_transaction ct', 'ct.co_trans_id = ctje.co_trans_id')->where(['ctje.co_trans_id' => $value->co_trans_id])->get()->result();
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
		$co_transaction = self::$db->from('co_transaction ct')->join('journals j', 'j.j_id = ct.co_journ_trans_id')->join('co_business_partners cbp', 'cbp.co_bp_id = ct.co_trans_doc_bp_id')->join('co_modes_of_payment cmp', 'cmp.co_mop_id = ct.co_trans_doc_pay_mode_id')->join('co_banks cb', 'cb.co_b_id = ct.co_trans_doc_pay_bank_id')->join('banks b', 'b.b_id = cb.b_id')->join('business_partners_type bpt', 'bpt.bpt_id = cbp.bpt_id')->join('company_branches co_br', 'co_br.cb_id = ct.cb_id')->where(['ct.co_trans_doc_bp_id' => $bp_id, 'ct.cb_id' => $user->cb_id])->get()->result();

		foreach ($co_transaction as $key => &$value) {
			$value->bank_details_data = self::$db->from('co_trans_bank_details ctbd')->join('co_transaction ct', 'ct.co_trans_id = ctbd.co_trans_id')->join('co_banks cb', 'cb.co_b_id = ctbd.co_b_id')->join('banks b', 'b.b_id = cb.b_id')->where(['ctbd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->discounts_data = self::$db->from('co_trans_discounts ctd')->join('co_transaction ct', 'ct.co_trans_id = ctd.co_trans_id')->join('co_discounts cd', 'cd.co_d_id = ctd.co_d_id')->where(['ctd.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->doc_reference_data = self::$db->from('co_trans_doc_reference ctdr')->join('co_transaction ct', 'ct.co_trans_id = ctdr.co_trans_id')->join('co_documents cd', 'cd.co_doc_id = ctdr.co_doc_id')->where(['ctdr.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->ewt_data = self::$db->from('co_trans_ewt cte')->join('co_transaction ct', 'ct.co_trans_id = cte.co_trans_id')->join('taxes t', 't.t_id = cte.t_id')->where(['cte.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->fwt_data = self::$db->from('co_trans_fwt ctf')->join('co_transaction ct', 'ct.co_trans_id = ctf.co_trans_id')->join('taxes t', 't.t_id = ctf.t_id')->where(['ctf.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->others_data = self::$db->from('co_trans_other cto')->join('co_transaction ct', 'ct.co_trans_id = cto.co_trans_id')->join('profiles p', 'p.p_id = cto.co_trans_preparedby_id')->where(['cto.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->prod_data = self::$db->from('co_trans_products ctp')->join('co_transaction ct', 'ct.co_trans_id = ctp.co_trans_id')->join('co_products cp', 'cp.co_p_id = ctp.co_p_id')->where(['ctp.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->serv_data = self::$db->from('co_trans_services cts')->join('co_transaction ct', 'ct.co_trans_id = cts.co_trans_id')->join('co_services cs', 'cs.co_s_id = cts.co_s_id')->where(['cts.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->vat_data = self::$db->from('co_trans_vat ctv')->join('co_transaction ct', 'ct.co_trans_id = ctv.co_trans_id')->join('taxes t', 't.t_id = ctv.t_id')->where(['ctv.co_trans_id' => $value->co_trans_id])->get()->result();

			$value->je_data = self::$db->from('co_trans_journ_entry ctje')->join('co_transaction ct', 'ct.co_trans_id = ctje.co_trans_id')->where(['ctje.co_trans_id' => $value->co_trans_id])->get()->result();
		}
		return $co_transaction;
	}

	public static function get_bank($user){
		return self::$db->from('co_banks')->join('banks', 'banks.b_id = co_banks.b_id')->where('co_banks.cb_id', $user->cb_id)->get()->result();
	}

	public static function get_product_service($user){
		$products = self::$db->get_where('co_products', ['cb_id' => $user->cb_id])->result();
		$services = self::$db->get_where('co_services', ['cb_id' => $user->cb_id])->result();

		$data = [];
		foreach ($products as $key => $value) {
			array_push($data, ['id' => $value->co_p_id, 'code' => $value->co_p_code, 'name' => $value->co_p_name, 'shortname' => $value->co_p_shortname, 'description' => $value->co_p_description, 'pcc_id' => $value->co_pcc_id, 'de_id' => $value->co_de_id, 'cb_id' => $value->cb_id, 'type' => 'product']);
		}
		foreach ($services as $key => $value) {
			array_push($data, ['id' => $value->co_s_id, 'code' => $value->co_s_code, 'name' => $value->co_s_name, 'shortname' => $value->co_s_shortname, 'description' => $value->co_s_description, 'pcc_id' => $value->co_pcc_id, 'de_id' => $value->co_de_id, 'cb_id' => $value->cb_id, 'type' => 'service']);
		}

		return $data;
	}

	public static function get_vat($user){
		return self::$db->from('co_taxes')->join('taxes', 'taxes.t_id = co_taxes.t_id')->join('tax_types', 'tax_types.tt_id = taxes.tt_id')->where(['tax_types.tt_id' => '2', 'co_taxes.cb_id' => $user->cb_id])->get()->result();
	}

	public static function get_ewt($user){
		return self::$db->from('co_taxes')->join('taxes', 'taxes.t_id = co_taxes.t_id')->join('tax_types', 'tax_types.tt_id = taxes.tt_id')->where(['tax_types.tt_id' => '5', 'co_taxes.cb_id' => $user->cb_id])->get()->result();
	}

	public static function get_discount($user){
		return self::$db->get_where('co_discounts', ['cb_id' => $user->cb_id])->result();
	}

	public static function get_fwt($user){
		return self::$db->from('co_taxes')->join('taxes', 'taxes.t_id = co_taxes.t_id')->join('tax_types', 'tax_types.tt_id = taxes.tt_id')->where(['tax_types.tt_id' => '6', 'co_taxes.cb_id' => $user->cb_id])->get()->result();
	}

	public static function get_doc_ref($user){
		return self::$db->from('co_documents')->join('co_journals', 'co_journals.co_j_id = co_documents.co_j_id')->where(['co_documents.cb_id' => $user->cb_id, 'co_journals.cb_id' => $user->cb_id])->get()->result();
	}

	public static function get_mop($user){
		return self::$db->get_where('co_modes_of_payment', ['cb_id' => $user->cb_id])->result();
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
															'co_trans_je_acc_code' => $value['co_trans_je_acc_code'],
															'co_trans_je_acc_name' => $value['co_trans_je_acc_name'],
															'co_trans_je_debit_credit' => $value['co_trans_je_debit_credit'],
															'co_trans_je_debit_amount' => $value['co_trans_je_debit_amount'],
															'co_trans_je_credit_amount' => $value['co_trans_je_credit_amount'],
															'co_trans_pcc_code' => $value['co_trans_pcc_code'],
															'co_trans_dept_code_name' => $value['co_trans_dept_code_name'],
															'co_trans_id' => $trans_id,
													]);
		}

	}
}