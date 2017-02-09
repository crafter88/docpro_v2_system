<?php

class Co_COA_Model extends CI_Model{
	private static $db;

	function __construct(){
		parent::__construct();
		self::$db = &get_instance()->db;
	}
	public static function coa_count($user){
		return count(self::$db->from('coa_lvl_1 coa1')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['cocoa1.cb_id' => $user->main_company->cb_id, 'coa1.flag' => '1'])->get()->result());
	}
	// ACCOUNT ELEMENTS
	public static function acc_elements_get($user){
		return self::$db->from('coa_lvl_1 coa1')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['cocoa1.cb_id' => $user->main_company->cb_id, 'coa1.flag' => '1'])->get()->result();
	}
	public static function acc_elements_add($data, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_1 coa1 JOIN co_coa_lvl1 cocoa1 ON cocoa1.lvl_1_id=coa1.lvl_1_id WHERE cocoa1.cb_id='".$user->cb_id."' ORDER BY CAST(coa1.lvl_1_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_1 coa1 JOIN co_coa_lvl1 cocoa1 ON cocoa1.lvl_1_id=coa1.lvl_1_id WHERE cocoa1.cb_id='".$user->cb_id."' ORDER BY CAST(coa1.lvl_1_code AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_1_seq) + 1).'' : '1';
		$code = count($last_record_code) > 0 ? (floatval($last_record_seq[0]->lvl_1_code) + 1).'' : '1';
		$coa1 = [
					'lvl_1_seq' => $seq, 
					'lvl_1_code' => $code, 
					'lvl_1_name' => $data['lvl_1_name'], 
					'lvl_1_company' => $data['lvl_1_company'], 
					'lvl_1_setup_company' => $data['lvl_1_setup_company']
				];
		self::$db->insert('coa_lvl_1', $coa1);
		$lvl_1_id = self::$db->insert_id();
		$coa2 = [
					'lvl_2_seq' => '1', 
					'lvl_2_code' => '0', 
					'lvl_2_name' => $data['lvl_1_name'], 
					'lvl_2_company' => $data['lvl_1_company'], 
					'lvl_2_setup_company' => $data['lvl_1_setup_company']
				];
		self::$db->insert('coa_lvl_2', $coa2);
		$lvl_2_id = self::$db->insert_id();
		$coa3 = [
					'lvl_3_seq' => '1', 
					'lvl_3_code' => '00', 
					'lvl_3_code_int' => '0', 
					'lvl_3_name' => $data['lvl_1_name'], 
					'lvl_3_company' => $data['lvl_1_company'], 
					'lvl_3_setup_company' => $data['lvl_1_setup_company']
				];
		self::$db->insert('coa_lvl_3', $coa3);
		$lvl_3_id = self::$db->insert_id();
		$coa4 = [
					'lvl_4_seq' => '1', 
					'lvl_4_code' => '0', 
					'lvl_4_name' => $data['lvl_1_name'], 
					'lvl_4_company' => $data['lvl_1_company'], 
					'lvl_4_setup_company' => $data['lvl_1_setup_company']
				];
		self::$db->insert('coa_lvl_4', $coa4);
		$lvl_4_id = self::$db->insert_id();
		$coa5 = [
					'lvl_5_seq' => '1', 
					'lvl_5_code' => '0', 
					'lvl_5_name' => $data['lvl_1_name'], 
					'lvl_5_company' => $data['lvl_1_company'], 
					'lvl_5_setup_company' => $data['lvl_1_setup_company']
				];
		self::$db->insert('coa_lvl_5', $coa5);
		$lvl_5_id = self::$db->insert_id();
		$coa6 = [
					'lvl_6_seq' => '1', 
					'lvl_6_code' => '0', 
					'lvl_6_name' => $data['lvl_1_name'], 
					'lvl_6_company' => $data['lvl_1_company'], 
					'lvl_6_setup_company' => $data['lvl_1_setup_company']
				];
		self::$db->insert('coa_lvl_6', $coa6);
		$lvl_6_id = self::$db->insert_id();
		self::$db->insert('co_coa_lvl1', ['lvl_1_id' => $lvl_1_id, 'cb_id' => $user->cb_id]);
		self::$db->insert('coalvl_1_2', ['lvl_1_id' => $lvl_1_id, 'lvl_2_id' => $lvl_2_id]);
		self::$db->insert('coalvl_2_3', ['lvl_2_id' => $lvl_2_id, 'lvl_3_id' => $lvl_3_id]);
		self::$db->insert('coalvl_3_4', ['lvl_3_id' => $lvl_3_id, 'lvl_4_id' => $lvl_4_id]);
		self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);
		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	}
	public static function acc_elements_edit($data, $id, $user){
		self::$db->query("UPDATE coa_lvl_1 coa1 SET coa1.lvl_1_code='' WHERE coa1.lvl_1_id IN (SELECT lvl_1_id FROM(SELECT coa1.lvl_1_id FROM coa_lvl_1 coa1 JOIN co_coa_lvl1 cocoa1 ON cocoa1.lvl_1_id=coa1.lvl_1_id WHERE cocoa1.cb_id='".$user->cb_id."' AND coa1.lvl_1_code='".$data['lvl_1_code']."') t) AND coa1.flag='1'");
		$lvl_2_id = self::$db->query("(SELECT MIN(coa2.lvl_2_id) AS lvl_2_id FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$id."')")->result()[0]->lvl_2_id;
		$lvl_3_id = self::$db->query("(SELECT MIN(coa3.lvl_3_id) AS lvl_3_id FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa3.lvl_3_id=coa23.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$id."')")->result()[0]->lvl_3_id;
		$lvl_4_id = self::$db->query("(SELECT MIN(coa4.lvl_4_id) AS lvl_4_id FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id JOIN coalvl_2_3 coa23 ON coa3.lvl_3_id=coa23.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$id."')")->result()[0]->lvl_4_id;
		$lvl_5_id = self::$db->query("(SELECT MIN(coa5.lvl_5_id) AS lvl_5_id FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id JOIN coalvl_2_3 coa23 ON coa3.lvl_3_id=coa23.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$id."')")->result()[0]->lvl_5_id;
		$lvl_6_id = self::$db->query("(SELECT MIN(coa6.lvl_6_id) AS lvl_6_id FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id JOIN coa_lvl_5 coa5 ON coa5.lvl_5_id=coa56.lvl_5_id JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id JOIN coalvl_2_3 coa23 ON coa3.lvl_3_id=coa23.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$id."')")->result()[0]->lvl_6_id;
		self::$db->where('lvl_1_id', $id)->update('coa_lvl_1', $data);
		self::$db->where('lvl_2_id', $lvl_2_id)->update('coa_lvl_2', ['lvl_2_name' => $data['lvl_1_name']]);
		self::$db->where('lvl_3_id', $lvl_3_id)->update('coa_lvl_3', ['lvl_3_name' => $data['lvl_1_name']]);
		self::$db->where('lvl_4_id', $lvl_4_id)->update('coa_lvl_4', ['lvl_4_name' => $data['lvl_1_name']]);
		self::$db->where('lvl_5_id', $lvl_5_id)->update('coa_lvl_5', ['lvl_5_name' => $data['lvl_1_name']]);
		self::$db->where('lvl_6_id', $lvl_6_id)->update('coa_lvl_6', ['lvl_6_name' => $data['lvl_1_name']]);
	}
	public static function acc_elements_delete($id){
		self::$db->where('lvl_1_id', $id)->update('coa_lvl_1', ['flag' => '0']);
	}

// ACCOUNT CLASSIFICATION
	public static function acc_classification_get($user){
		return self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['coa2.flag' => '1', 'cocoa1.cb_id' => $user->main_company->cb_id])->get()->result();
	}
	public static function acc_classification_add($data, $lvl_1_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa12.lvl_2_id=coa2.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$lvl_1_id."' ORDER BY CAST(coa2.lvl_2_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa12.lvl_2_id=coa2.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa1.lvl_1_id='".$lvl_1_id."' ORDER BY CAST(coa2.lvl_2_code AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_2_seq) + 1).'' : '1';
		$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_2_code) + 1).'' : '1';
		$coa2 = [
					'lvl_2_seq' => $seq, 
					'lvl_2_code' => $code, 
					'lvl_2_name' => $data['lvl_2_name'], 
					'lvl_2_company' => $data['lvl_2_company'], 
					'lvl_2_setup_company' => $data['lvl_2_setup_company']
				];
		self::$db->insert('coa_lvl_2', $coa2);
		$lvl_2_id = self::$db->insert_id();
		self::$db->insert('coalvl_1_2', ['lvl_1_id' => $lvl_1_id, 'lvl_2_id' => $lvl_2_id]);
	}
	public static function acc_classification_edit($data, $lvl_1_id, $lvl_2_id, $user){
		self::$db->query("UPDATE coa_lvl_2 coa2 SET coa2.lvl_2_code='' WHERE coa2.lvl_2_id IN (SELECT lvl_2_id FROM (SELECT coa2.lvl_2_id FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa12.lvl_2_id=coa2.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa2.lvl_2_code='".$data['lvl_2_code']."' AND coa1.lvl_1_id='".$lvl_1_id."') t) AND coa2.flag='1'");
		$coa2 = [
					'lvl_2_code' => $data['lvl_2_code'], 
					'lvl_2_name' => $data['lvl_2_name']
				];
		self::$db->where('lvl_2_id', $lvl_2_id)->update('coa_lvl_2', $coa2);
	}
	public static function acc_classification_delete($id){
		self::$db->where('lvl_2_id', $id)->update('coa_lvl_2', ['flag' => '0']);
	}

// LINE ITEMS
	public static function line_items_get($user){
		return self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['coa2.flag' => '1', 'cocoa1.cb_id' => $user->main_company->cb_id])->get()->result();
	}
	public static function line_items_add($data, $lvl_2_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa23.lvl_3_id=coa3.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id WHERE coa2.lvl_2_id='".$lvl_2_id."' ORDER BY CAST(coa3.lvl_3_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa23.lvl_3_id=coa3.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id WHERE coa2.lvl_2_id='".$lvl_2_id."' ORDER BY CAST(coa3.lvl_3_code_int AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_3_seq) + 1).'' : '1';
		$code_int = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_3_code_int) + 1).'' : '1';
		$code = strlen($code_int) === 1 ? '0'.$code_int : $code_int;
		$coa3 = [
					'lvl_3_seq' => $seq, 
					'lvl_3_code' => $code, 
					'lvl_3_code_int' => $code_int, 
					'lvl_3_name' => $data['lvl_3_name'], 
					'lvl_3_company' => $data['lvl_3_company'], 
					'lvl_3_setup_company' => $data['lvl_3_setup_company']
				];
		self::$db->insert('coa_lvl_3', $coa3);
		$lvl_3_id = self::$db->insert_id();
		$coa4 = [
					'lvl_4_seq' => '1', 
					'lvl_4_code' => '0', 
					'lvl_4_name' => $data['lvl_3_name'], 
					'lvl_4_company' => $data['lvl_3_company'], 
					'lvl_4_setup_company' => $data['lvl_3_setup_company']
				];
		self::$db->insert('coa_lvl_4', $coa4);
		$lvl_4_id = self::$db->insert_id();
		$coa5 = [
					'lvl_5_seq' => '1',
					'lvl_5_code' => '0', 
					'lvl_5_name' => $data['lvl_3_name'], 
					'lvl_5_company' => $data['lvl_3_company'], 
					'lvl_5_setup_company' => $data['lvl_3_setup_company']
				];
		self::$db->insert('coa_lvl_5', $coa5);
		$lvl_5_id = self::$db->insert_id();
		$coa6 = [
					'lvl_6_seq' => '1',
					'lvl_6_code' => '0', 
					'lvl_6_name' => $data['lvl_3_name'], 
					'lvl_6_company' => $data['lvl_3_company'], 
					'lvl_6_setup_company' => $data['lvl_3_setup_company']
				];
		self::$db->insert('coa_lvl_6', $coa6);
		$lvl_6_id = self::$db->insert_id();
		
		self::$db->insert('coalvl_2_3', ['lvl_2_id' => $lvl_2_id, 'lvl_3_id' => $lvl_3_id]);
		self::$db->insert('coalvl_3_4', ['lvl_3_id' => $lvl_3_id, 'lvl_4_id' => $lvl_4_id]);
		self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);
		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	}
	public static function line_items_edit($data, $lvl_2_id, $lvl_3_id, $user){
		self::$db->query("UPDATE coa_lvl_3 coa3 SET coa3.lvl_3_code='', coa3.lvl_3_code_int='' WHERE coa3.lvl_3_id IN (SELECT lvl_3_id FROM (SELECT coa3.lvl_3_id FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa23.lvl_3_id=coa3.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id WHERE coa3.lvl_3_code='".$data['lvl_3_code']."' AND coa2.lvl_2_id='".$lvl_2_id."') t) AND coa3.flag='1'");
		$lvl_4_id = self::$db->query("(SELECT MIN(coa4.lvl_4_id) AS lvl_4_id FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."')")->result()[0]->lvl_4_id;
		$lvl_5_id = self::$db->query("(SELECT MIN(coa5.lvl_5_id) AS lvl_5_id FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."')")->result()[0]->lvl_5_id;
		$lvl_6_id = self::$db->query("(SELECT MIN(coa6.lvl_6_id) AS lvl_6_id FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id JOIN coa_lvl_5 coa5 ON coa5.lvl_5_id=coa56.lvl_5_id JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."')")->result()[0]->lvl_6_id;
		$coa3 = [
					'lvl_3_code' => $data['lvl_3_code'], 
					'lvl_3_code_int' => floatval($data['lvl_3_code']), 
					'lvl_3_name' => $data['lvl_3_name']
				];
		self::$db->where('lvl_3_id', $lvl_3_id)->update('coa_lvl_3', $coa3);
		self::$db->where('lvl_4_id', $lvl_4_id)->update('coa_lvl_4', ['lvl_4_name' => $data['lvl_3_name']]);
		self::$db->where('lvl_5_id', $lvl_5_id)->update('coa_lvl_5', ['lvl_5_name' => $data['lvl_3_name']]);
		self::$db->where('lvl_6_id', $lvl_6_id)->update('coa_lvl_6', ['lvl_6_name' => $data['lvl_3_name']]);
	}
	public static function line_items_delete($id){
		self::$db->where('lvl_3_id', $id)->update('coa_lvl_3', ['flag' => '0']);
	}

// ACCOUNT SUBCLASSIFICATION
	public static function acc_sub_get($user){
		return self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['coa2.flag' => '1', 'cocoa1.cb_id' => $user->main_company->cb_id])->get()->result();
	}
	public static function acc_sub_add($data, $lvl_3_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."' ORDER BY CAST(coa4.lvl_4_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."' ORDER BY CAST(coa4.lvl_4_code AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_4_seq) + 1).'' : '1';
		$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_4_code) + 1).'' : '1';
		$coa4 = [
					'lvl_4_seq' => $seq, 
					'lvl_4_code' => $code, 
					'lvl_4_name' => $data['lvl_4_name'], 
					'bir' => $data['bir'],
					'lvl_4_company' => $data['lvl_4_company'], 
					'lvl_4_setup_company' => $data['lvl_4_setup_company']
				];
		self::$db->insert('coa_lvl_4', $coa4);
		$lvl_4_id = self::$db->insert_id();
		$coa5 = [
					'lvl_5_seq' => '1', 
					'lvl_5_code' => '0', 
					'lvl_5_name' => $data['lvl_4_name'], 
					'lvl_5_company' => $data['lvl_4_company'], 
					'lvl_5_setup_company' => $data['lvl_4_setup_company']
				];
		self::$db->insert('coa_lvl_5', $coa5);
		$lvl_5_id = self::$db->insert_id();
		$coa6 = [
					'lvl_6_seq' => '1', 
					'lvl_6_code' => '0', 
					'lvl_6_name' => $data['lvl_4_name'], 
					'lvl_6_company' => $data['lvl_4_company'], 
					'lvl_6_setup_company' => $data['lvl_4_setup_company']
				];
		self::$db->insert('coa_lvl_6', $coa6);
		$lvl_6_id = self::$db->insert_id();

		self::$db->insert('coalvl_3_4', ['lvl_3_id' => $lvl_3_id, 'lvl_4_id' => $lvl_4_id]);
		self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);
		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	}
	public static function acc_sub_edit($data, $lvl_3_id, $lvl_4_id, $user){
		self::$db->query("UPDATE coa_lvl_4 coa4 SET coa4.lvl_4_code='' WHERE coa4.lvl_4_id IN (SELECT lvl_4_id FROM (SELECT coa4.lvl_4_id FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa4.lvl_4_code='".$data['lvl_4_code']."' AND coa3.lvl_3_id='".$lvl_3_id."') t) AND coa4.flag='1'");
		$coa4 = [
					'lvl_4_code' => $data['lvl_4_code'], 
					'lvl_4_name' => $data['lvl_4_name'],
					'bir' => $data['bir']
				];
		$lvl_5_id = self::$db->query("(SELECT MIN(coa5.lvl_5_id) AS lvl_5_id FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa4.lvl_4_id='".$lvl_4_id."')")->result()[0]->lvl_5_id;
		$lvl_6_id = self::$db->query("(SELECT MIN(coa6.lvl_6_id) AS lvl_6_id FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id JOIN coa_lvl_5 coa5 ON coa5.lvl_5_id=coa56.lvl_5_id JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa4.lvl_4_id='".$lvl_4_id."')")->result()[0]->lvl_6_id;
		self::$db->where('lvl_4_id', $lvl_4_id)->update('coa_lvl_4', $coa4);
		self::$db->where('lvl_5_id', $lvl_5_id)->update('coa_lvl_5', ['lvl_5_name' => $data['lvl_4_name']]);
		self::$db->where('lvl_6_id', $lvl_6_id)->update('coa_lvl_6', ['lvl_6_name' => $data['lvl_4_name']]);
	}
	public static function acc_sub_delete($id){
		self::$db->where('lvl_4_id', $id)->update('coa_lvl_4', ['flag' => '0']);
	}
	public static function lvl_5_get($user){
		return self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id=coa5.lvl_5_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id=coa45.lvl_4_id')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['coa2.flag' => '1', 'cocoa1.cb_id' => $user->main_company->cb_id])->get()->result();
	}
	public static function lvl_5_add($data, $lvl_4_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa4.lvl_4_id='".$lvl_4_id."' ORDER BY CAST(coa5.lvl_5_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa4.lvl_4_id='".$lvl_4_id."' ORDER BY CAST(coa5.lvl_5_code AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_5_seq) + 1).'' : '1';
		$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_5_code) + 1).'' : '1';
		$coa5 = [
					'lvl_5_seq' => $seq, 
					'lvl_5_code' => $code, 
					'lvl_5_name' => $data['lvl_5_name'], 
					'lvl_5_company' => $data['lvl_5_company'], 
					'lvl_5_setup_company' => $data['lvl_5_setup_company']
				];
		self::$db->insert('coa_lvl_5', $coa5);
		$lvl_5_id = self::$db->insert_id();
		$coa6 = [
					'lvl_6_seq' => '1', 
					'lvl_6_code' => '0', 
					'lvl_6_name' => $data['lvl_5_name'], 
					'lvl_6_company' => $data['lvl_5_company'], 
					'lvl_6_setup_company' => $data['lvl_5_setup_company']
				];
		self::$db->insert('coa_lvl_6', $coa6);
		$lvl_6_id = self::$db->insert_id();
		self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);
		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	}
	public static function lvl_5_edit($data, $lvl_4_id, $lvl_5_id, $user){
		self::$db->query("UPDATE coa_lvl_5 coa5 SET coa5.lvl_5_code='' WHERE coa5.lvl_5_id IN (SELECT lvl_5_id FROM (SELECT coa5.lvl_5_id FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa5.lvl_5_code='".$data['lvl_5_code']."' AND coa4.lvl_4_id='".$lvl_4_id."') t) AND coa5.flag='1'");
		$coa5 = [
					'lvl_5_code' => $data['lvl_5_code'], 
					'lvl_5_name' => $data['lvl_5_name']
				];
		$lvl_6_id = self::$db->query("(SELECT MIN(coa6.lvl_6_id) AS lvl_6_id FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id JOIN coa_lvl_5 coa5 ON coa5.lvl_5_id=coa56.lvl_5_id WHERE coa5.lvl_5_id='".$lvl_5_id."')")->result()[0]->lvl_6_id;
		self::$db->where('lvl_5_id', $lvl_5_id)->update('coa_lvl_5', $coa5);
		self::$db->where('lvl_6_id', $lvl_6_id)->update('coa_lvl_6', ['lvl_6_name' => $data['lvl_5_name']]);
	}
	public static function lvl_5_delete($id){
		self::$db->where('lvl_5_id', $id)->update('coa_lvl_5', ['flag' => '0']);
	}
// CHART OF ACCOUNTS
	public static function coa_get($user){
		$data = self::$db->select("coa.*, coa1.*, coa1.flag AS flag1, coa2.*, coa2.flag AS flag2, coa3.*, coa3.flag AS flag3, coa4.*, coa4.flag AS flag4, coa5.*, coa5.flag AS flag5")->from('coa')->join('co_coa cocoa', 'cocoa.coa_id=coa.coa_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id=coa.lvl_1_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id=coa.lvl_2_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id=coa.lvl_3_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id=coa.lvl_4_id')->join('coa_lvl_5 coa5', 'coa5.lvl_5_id=coa.lvl_5_id')->where(['cocoa.cb_id' => $user->main_company->cb_id, 'coa.flag' => '1', 'coa1.status' => '1', 'coa2.status' => '1', 'coa3.status' => '1', 'coa4.status' => '1', 'coa5.status' => '1'])->get()->result();
		$result = [];
		foreach ($data as $key => $value) {
			$lvl_1 = [
						'lvl_1_id' => $value->flag1 !== '0' ? $value->lvl_1_id : '',
						'lvl_1_seq' => $value->flag1 !== '0' ? $value->lvl_1_seq : '',
						'lvl_1_code' => $value->flag1 !== '0' ? $value->lvl_1_code : '',
						'lvl_1_name' => $value->flag1 !== '0' ? $value->lvl_1_name : ''
					];
			$lvl_2 = [
						'lvl_2_id' => $value->flag2 !== '0' ? $value->lvl_2_id : '',
						'lvl_2_seq' => $value->flag2 !== '0' ? $value->lvl_2_seq : '',
						'lvl_2_code' => $value->flag2 !== '0' ? $value->lvl_2_code : '',
						'lvl_2_name' => $value->flag2 !== '0' ? $value->lvl_2_name : ''
					];
			$lvl_3 = [
						'lvl_3_id' => $value->flag3 !== '0' ? $value->lvl_3_id : '',
						'lvl_3_seq' => $value->flag3 !== '0' ? $value->lvl_3_seq : '',
						'lvl_3_code' => $value->flag3 !== '0' ? $value->lvl_3_code : '',
						'lvl_3_name' => $value->flag3 !== '0' ? $value->lvl_3_name : ''
					];
			$lvl_4 = [
						'lvl_4_id' => $value->flag4 !== '0' ? $value->lvl_4_id : '',
						'lvl_4_seq' => $value->flag4 !== '0' ? $value->lvl_4_seq : '',
						'lvl_4_code' => $value->flag4 !== '0' ? $value->lvl_4_code : '',
						'lvl_4_name' => $value->flag4 !== '0' ? $value->lvl_4_name : '',
						'bir' => $value->flag4 !== '0' ? $value->bir : ''
					];
			$lvl_5 = [
						'lvl_5_id' => $value->flag5 !== '0' ? $value->lvl_5_id : '',
						'lvl_5_seq' => $value->flag5 !== '0' ? $value->lvl_5_seq : '',
						'lvl_5_code' => $value->flag5 !== '0' ? $value->lvl_5_code : '',
						'lvl_5_name' => $value->flag5 !== '0' ? $value->lvl_5_name : ''
					];
			$coa = [
						'coa_id' => $value->coa_id,
						'coa_code' => $value->coa_code,
						'coa_name' => $value->coa_name,
					];
			$result_array = array_merge($lvl_1, $lvl_2, $lvl_3, $lvl_4, $lvl_5, $coa);
			array_push($result, $result_array);
		}
		return $result;
	}
	public static function coa_get_elements($user){
		return self::$db->from('coa_lvl_1 coa1')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['cocoa1.cb_id' => $user->main_company->cb_id, 'coa1.flag' => '1', 'coa1.status' => '1'])->get()->result();
	}
	public static function coa_get_classification($lvl_1_id){
		return self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id=coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id=coa12.lvl_1_id')->where(['coa1.lvl_1_id' => $lvl_1_id, 'coa2.flag' => '1', 'coa2.status' => '1'])->get()->result();
	}
	public static function coa_get_line_item($lvl_2_id){
		return self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id=coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id=coa23.lvl_2_id')->where(['coa2.lvl_2_id' => $lvl_2_id, 'coa3.flag' => '1', 'coa3.status' => '1'])->get()->result();
	}
	public static function coa_get_subclassification($lvl_3_id){
		return self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id=coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id=coa34.lvl_3_id')->where(['coa3.lvl_3_id' => $lvl_3_id, 'coa4.flag' => '1', 'coa4.status' => '1'])->get()->result();
	}
	public static function coa_get_lvl5($lvl_4_id){
		// return self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id=coa5.lvl_5_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id=coa45.lvl_4_id')->where(['coa4.lvl_4_id' => $lvl_4_id, 'coa5.flag' => '1', 'coa5.status' => '1'])->get()->result();

		return self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id WHERE coa45.lvl_4_id='".$lvl_4_id."' AND coa5.flag='1' ORDER BY CAST(coa5.lvl_5_code AS DECIMAL) DESC LIMIT 1")->result();
	}
	public static function coa_get_lvl6($lvl_5_id){
		return self::$db->query("SELECT * FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id WHERE coa56.lvl_5_id='".$lvl_5_id."' AND coa6.flag='1' ORDER BY CAST(coa6.lvl_6_code AS DECIMAL) DESC LIMIT 1")->result();
	}
	// public static function coa_add($data, $lvl_6, $lvl_5_id, $user){
	// 	$lvl_6_id = 0;
	// 	if($lvl_6 !== null){
	// 		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id WHERE coa56.lvl_5_id='".$lvl_5_id."' ORDER BY CAST(coa6.lvl_6_seq AS DECIMAL) DESC LIMIT 1")->result(); 
	// 		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id WHERE coa56.lvl_5_id='".$lvl_5_id."' ORDER BY CAST(coa6.lvl_6_code AS DECIMAL) DESC LIMIT 1")->result();
	// 		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_6_seq) + 1 ).'' : '1';
	// 		$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_6_code) + 1 ).'' : '1';
	// 		$lvl_6['lvl_6_seq'] = $seq;
	// 		$lvl_6['lvl_6_code'] = $code;
	// 		self::$db->insert('coa_lvl_6', $lvl_6);
	// 		$lvl_6_id = self::$db->insert_id();
	// 		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	// 	}else{
	// 		$lvl_6_id = self::$db->from('coa_lvl_6 coa6')->join('coalvl_5_6 coa56', 'coa56.lvl_6_id=coa6.lvl_6_id')->where(['coa56.lvl_5_id' => $lvl_5_id])->get()->result()[0]->lvl_6_id;
	// 	}
	// 	$data['lvl_6_id'] = $lvl_6_id;
	// 	self::$db->insert('coa', $data);
	// 	$coa_id = self::$db->insert_id();
	// 	self::$db->insert('co_coa', ['coa_id' => $coa_id, 'cb_id' => $user->cb_id]);
	// }
	// public static function coa_edit($data, $lvl_6, $lvl_5_id, $lvl_6_id, $coa_id, $o_lvl6_id, $user){
	// 	if($lvl_6 !== null){
	// 		self::$db->where(['lvl_6_id' => $o_lvl6_id])->delete('coa_lvl_6');
	// 		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id WHERE coa56.lvl_5_id='".$lvl_5_id."' ORDER BY CAST(coa6.lvl_6_seq AS DECIMAL) DESC LIMIT 1")->result(); 
	// 		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id WHERE coa56.lvl_5_id='".$lvl_5_id."' ORDER BY CAST(coa6.lvl_6_code AS DECIMAL) DESC LIMIT 1")->result();
	// 		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_6_seq) + 1 ).'' : '1';
	// 		$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_6_code) + 1 ).'' : '1';
	// 		$lvl_6['lvl_6_seq'] = $seq;
	// 		$lvl_6['lvl_6_code'] = $code;
	// 		self::$db->insert('coa_lvl_6', $lvl_6);
	// 		$lvl_6_id = self::$db->insert_id();
	// 		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	// 	}else{
	// 		if($lvl_6_id === null){
	// 			$lvl_6_id = self::$db->from('coa_lvl_6 coa6')->join('coalvl_5_6 coa56', 'coa56.lvl_6_id=coa6.lvl_6_id')->where(['coa56.lvl_5_id' => $lvl_5_id])->get()->result()[0]->lvl_6_id;
	// 		}else{
	// 			self::$db->where(['lvl_6_id' => $lvl_6_id])->update('coa_lvl_6', ['lvl_6_name' => $data['coa_name']]);
	// 		}
	// 	}
	// 	$data['lvl_6_id'] = $lvl_6_id;
	// 	self::$db->where(['coa_id' => $coa_id])->update('coa', $data);
	// }
	// public static function coa_delete($id, $lvl_6_id){
	// 	self::$db->where(['coa_id' => $id])->update('coa', ['flag' => '0']);
	// 	self::$db->where(['lvl_6_id' => $lvl_6_id])->update('coa_lvl_6', ['flag' => '0']);
	// }

	public static function coa_add($data, $lvl_5, $lvl_4_id, $user){
		$lvl_5_id = 0;
		if($lvl_5 !== null){
			$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id WHERE coa45.lvl_4_id='".$lvl_4_id."' ORDER BY CAST(coa5.lvl_5_seq AS DECIMAL) DESC LIMIT 1")->result(); 
			$last_record_code = self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id WHERE coa45.lvl_4_id='".$lvl_4_id."' ORDER BY CAST(coa5.lvl_5_code AS DECIMAL) DESC LIMIT 1")->result(); 
			$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_5_seq) + 1 ).'' : '1';
			$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_5_code) + 1 ).'' : '1';
			$lvl_5['lvl_5_seq'] = $seq;
			$lvl_5['lvl_5_code'] = $code;
			self::$db->insert('coa_lvl_5', $lvl_5);
			$lvl_5_id = self::$db->insert_id();
			self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);
		}else{
			$lvl_5_id = self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id=coa5.lvl_5_id')->where(['coa45.lvl_4_id' => $lvl_4_id, 'coa5.lvl_5_seq' => '1'])->get()->result()[0]->lvl_5_id;
		}
		$data['lvl_5_id'] = $lvl_5_id;
		self::$db->insert('coa', $data);
		$coa_id = self::$db->insert_id();
		self::$db->insert('co_coa', ['coa_id' => $coa_id, 'cb_id' => $user->cb_id]);
	}
	public static function coa_edit($data, $lvl_5, $lvl_4_id, $lvl_5_id, $coa_id, $o_lvl5_id, $user){
		if($lvl_5 !== null){
			self::$db->where(['lvl_5_id' => $o_lvl5_id])->delete('coa_lvl_5');
			$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id WHERE coa45.lvl_4_id='".$lvl_4_id."' ORDER BY CAST(coa5.lvl_5_seq AS DECIMAL) DESC LIMIT 1")->result(); 
			$last_record_code = self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id WHERE coa45.lvl_4_id='".$lvl_4_id."' ORDER BY CAST(coa5.lvl_5_code AS DECIMAL) DESC LIMIT 1")->result();
			$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_5_seq) + 1 ).'' : '1';
			$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_5_code) + 1 ).'' : '1';
			$lvl_5['lvl_5_seq'] = $seq;
			$lvl_5['lvl_5_code'] = $code;
			self::$db->insert('coa_lvl_5', $lvl_5);
			$lvl_5_id = self::$db->insert_id();
			self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);

		}else{
			if($lvl_5_id === null){
				$lvl_5_id = self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id=coa5.lvl_5_id')->where(['coa45.lvl_4_id' => $lvl_4_id, 'coa5.lvl_5_seq' => '1'])->get()->result()[0]->lvl_5_id;
			}else{
				self::$db->where(['lvl_5_id' => $lvl_5_id])->update('coa_lvl_5', ['lvl_5_name' => $data['coa_name']]);
			}
		}
		$data['lvl_5_id'] = $lvl_5_id;
		self::$db->where(['coa_id' => $coa_id])->update('coa', $data);
	}
	public static function coa_delete($id, $lvl_5_id){
		self::$db->where(['coa_id' => $id])->update('coa', ['flag' => '0']);
		self::$db->where(['lvl_5_id' => $lvl_5_id])->update('coa_lvl_5', ['flag' => '0']);
	}


// RELOAD TABLES
	public static function reload_lvl_2($lvl_1_id){
		return self::$db->select('coa1.*, coa2.*, coa2.status AS lvl_2_status')->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa2.flag' => '1', 'coa1.lvl_1_id' => $lvl_1_id])->order_by('coa1.lvl_1_id', 'asc')->get()->result();
	}

	public static function reload_lvl_3($lvl_2_id){
		return self::$db->select('coa1.*, coa2.*, coa3.*, coa3.status AS lvl_3_status')->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa3.flag' => '1', 'coa2.lvl_2_id' => $lvl_2_id])->get()->result();
	}

	public static function reload_lvl_4($lvl_3_id){
		return self::$db->select('coa1.*, coa2.*, coa3.*, coa4.*, coa4.status AS lvl_4_status')->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa4.flag' => '1', 'coa3.lvl_3_id' => $lvl_3_id])->get()->result();
	}

	public static function reload_lvl_5($lvl_4_id){
		return self::$db->select('coa1.*, coa2.*, coa3.*, coa4.*, coa5.*, coa5.status AS lvl_5_status')->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id=coa5.lvl_5_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id=coa45.lvl_4_id')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa5.flag' => '1', 'coa4.lvl_4_id' => $lvl_4_id])->get()->result();
	}

// SUMMARY LIST
	private static function coa_cat_record($lvl_1_id = '', $lvl_1_seq = '', $lvl_1_code = '', $lvl_1_name = '',
									$lvl_2_id = '', $lvl_2_seq = '', $lvl_2_code = '', $lvl_2_name = '',
									$lvl_3_id = '', $lvl_3_seq = '', $lvl_3_code = '', $lvl_3_name = '',
									$lvl_4_id = '', $lvl_4_seq = '', $lvl_4_code = '', $lvl_4_name = '',
									$lvl_5_id = '', $lvl_5_seq = '', $lvl_5_code = '', $lvl_5_name = ''
									){
		return [
				'lvl_1_id' => $lvl_1_id,
				'lvl_1_seq' => $lvl_1_seq,
				'lvl_1_code' => $lvl_1_code,
				'lvl_1_name' => $lvl_1_name,
				'lvl_2_id' => $lvl_2_id,
				'lvl_2_seq' => $lvl_2_seq,
				'lvl_2_code' => $lvl_2_code,
				'lvl_2_name' => $lvl_2_name,
				'lvl_3_id' => $lvl_3_id,
				'lvl_3_seq' => $lvl_3_seq,
				'lvl_3_code' => $lvl_3_code,
				'lvl_3_name' => $lvl_3_name,
				'lvl_4_id' => $lvl_4_id,
				'lvl_4_seq' => $lvl_4_seq,
				'lvl_4_code' => $lvl_4_code,
				'lvl_4_name' => $lvl_4_name,
				'lvl_5_id' => $lvl_5_id,
				'lvl_5_seq' => $lvl_5_seq,
				'lvl_5_code' => $lvl_5_code,
				'lvl_5_name' => $lvl_5_name,
			];
	}
	public static function get_coa_category_summary_list($user){
		$result = [];

		$lvl_1 = self::$db->from('coa_lvl_1 coa1')->join('co_coa_lvl1 cocoa1', 'cocoa1.lvl_1_id=coa1.lvl_1_id')->where(['cocoa1.cb_id' => $user->main_company->cb_id, 'coa1.flag' => '1'])->get()->result();

		foreach ($lvl_1 as $key => &$lvl1) {
			$lvl_2 = self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->where(['coa12.lvl_1_id' => $lvl1->lvl_1_id, 'coa2.flag' => '1'])->get()->result();
			if(count($lvl_2) > 0){
				foreach ($lvl_2 as $key => &$lvl2) {
					$lvl_3 = self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->where(['coa23.lvl_2_id' => $lvl2->lvl_2_id, 'coa3.flag' => '1'])->get()->result();
					if(count($lvl_3) > 0){
						foreach ($lvl_3 as $key => &$lvl3) {
							$lvl_4 = self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->where(['coa34.lvl_3_id' => $lvl3->lvl_3_id, 'coa4.flag' => '1'])->get()->result();
							if(count($lvl_4) > 0){
								foreach ($lvl_4 as $key => &$lvl4) {
									$lvl_5 = self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id = coa5.lvl_5_id')->where(['coa45.lvl_4_id' => $lvl4->lvl_4_id, 'coa5.flag' => '1'])->get()->result();
									if(count($lvl_5) > 0){
										foreach ($lvl_5 as $key => &$lvl5) {
											array_push($result, self::coa_cat_record($lvl1->lvl_1_id, $lvl1->lvl_1_seq, $lvl1->lvl_1_code, $lvl1->lvl_1_name, $lvl2->lvl_2_id, $lvl2->lvl_2_seq, $lvl2->lvl_2_code, $lvl2->lvl_2_name, $lvl3->lvl_3_id, $lvl3->lvl_3_seq, $lvl3->lvl_3_code, $lvl3->lvl_3_name, $lvl4->lvl_4_id, $lvl4->lvl_4_seq, $lvl4->lvl_4_code, $lvl4->lvl_4_name, $lvl5->lvl_5_id, $lvl5->lvl_5_seq, $lvl5->lvl_5_code, $lvl5->lvl_5_name));
										}
									}else{
										array_push($result, self::coa_cat_record($lvl1->lvl_1_id, $lvl1->lvl_1_seq, $lvl1->lvl_1_code, $lvl1->lvl_1_name, $lvl2->lvl_2_id, $lvl2->lvl_2_seq, $lvl2->lvl_2_code, $lvl2->lvl_2_name, $lvl3->lvl_3_id, $lvl3->lvl_3_seq, $lvl3->lvl_3_code, $lvl3->lvl_3_name, $lvl4->lvl_4_id, $lvl4->lvl_4_seq, $lvl4->lvl_4_code, $lvl4->lvl_4_name));
									}
								}
							}else{
								array_push($result, self::coa_cat_record($lvl1->lvl_1_id, $lvl1->lvl_1_seq, $lvl1->lvl_1_code, $lvl1->lvl_1_name, $lvl2->lvl_2_id, $lvl2->lvl_2_seq, $lvl2->lvl_2_code, $lvl2->lvl_2_name, $lvl3->lvl_3_id, $lvl3->lvl_3_seq, $lvl3->lvl_3_code, $lvl3->lvl_3_name));
							}
						}
					}else{
						array_push($result, self::coa_cat_record($lvl1->lvl_1_id, $lvl1->lvl_1_seq, $lvl1->lvl_1_code, $lvl1->lvl_1_name, $lvl2->lvl_2_id, $lvl2->lvl_2_seq, $lvl2->lvl_2_code, $lvl2->lvl_2_name));
					}
				}
			}else{
				array_push($result, self::coa_cat_record($lvl1->lvl_1_id, $lvl1->lvl_1_seq, $lvl1->lvl_1_code, $lvl1->lvl_1_name));
			}
			
		}
		return $result;
	}
	public static function get_coa_summary_list($user){
		return self::$db->from('coa')->join('co_coa cocoa', 'cocoa.coa_id = coa.coa_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa.lvl_1_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa.lvl_2_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa.lvl_3_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id = coa.lvl_4_id')->join('coa_lvl_5 coa5', 'coa5.lvl_5_id = coa.lvl_5_id')->join('coa_lvl_6 coa6', 'coa6.lvl_6_id = coa.lvl_6_id')->get()->result();
	}

	public static function enable_lvl_1($id){
		self::$db->where(['lvl_1_id' => $id])->update('coa_lvl_1', ['status' => '1']);
	}
	public static function disable_lvl_1($id){
		self::$db->where(['lvl_1_id' => $id])->update('coa_lvl_1', ['status' => '0']);
	}
	public static function enable_lvl_2($id){
		self::$db->where(['lvl_2_id' => $id])->update('coa_lvl_2', ['status' => '1']);
	}
	public static function disable_lvl_2($id){
		self::$db->where(['lvl_2_id' => $id])->update('coa_lvl_2', ['status' => '0']);
	}
	public static function enable_lvl_3($id){
		self::$db->where(['lvl_3_id' => $id])->update('coa_lvl_3', ['status' => '1']);
	}
	public static function disable_lvl_3($id){
		self::$db->where(['lvl_3_id' => $id])->update('coa_lvl_3', ['status' => '0']);
	}
	public static function enable_lvl_4($id){
		self::$db->where(['lvl_4_id' => $id])->update('coa_lvl_4', ['status' => '1']);
	}
	public static function disable_lvl_4($id){
		self::$db->where(['lvl_4_id' => $id])->update('coa_lvl_4', ['status' => '0']);
	}
	public static function enable_lvl_5($id){
		self::$db->where(['lvl_5_id' => $id])->update('coa_lvl_5', ['status' => '1']);
	}
	public static function disable_lvl_5($id){
		self::$db->where(['lvl_5_id' => $id])->update('coa_lvl_5', ['status' => '0']);
	}
}