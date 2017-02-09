<?php

class COA_Model extends CI_Model{
	private static $db;

	function __construct(){
		parent::__construct();
		self::$db = &get_instance()->db;
	}

	public static function coa_setting_count(){
		return count(self::$db->get_where('coa', ['coa_company' => 'docpro', 'flag' => '1'])->result());
	}

	public static function coa_count(){
		return count(self::$db->get_where('coa_lvl_1', ['lvl_1_company' => 'docpro', 'flag' => '1'])->result());
	}

	public static function coa_get(){
		return self::$db->from('coa')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id=coa.lvl_1_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id=coa.lvl_2_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id=coa.lvl_3_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id=coa.lvl_4_id')->join('coa_lvl_5 coa5', 'coa5.lvl_5_id=coa.lvl_5_id')->where(['coa.coa_company' => 'docpro', 'coa.flag' => '1'])->get()->result();
	}

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

// ACCOUNT ELEMENTS
	public static function acc_elements_get(){
		return self::$db->get_where('coa_lvl_1', ['flag' => '1', 'lvl_1_company' => 'docpro'])->result();
	}
	public static function acc_elements_add($data, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_1 WHERE lvl_1_company='docpro' ORDER BY CAST(lvl_1_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_1 WHERE lvl_1_company='docpro' ORDER BY CAST(lvl_1_code AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->lvl_1_seq) + 1).'' : '1';
		$code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->lvl_1_code) + 1).'' : '1';
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
		self::$db->insert('coalvl_1_2', ['lvl_1_id' => $lvl_1_id, 'lvl_2_id' => $lvl_2_id]);
		self::$db->insert('coalvl_2_3', ['lvl_2_id' => $lvl_2_id, 'lvl_3_id' => $lvl_3_id]);
		self::$db->insert('coalvl_3_4', ['lvl_3_id' => $lvl_3_id, 'lvl_4_id' => $lvl_4_id]);
		self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);
		self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
	}
	public static function acc_elements_edit($data, $id, $user){
		self::$db->query("UPDATE coa_lvl_1 coa1 SET coa1.lvl_1_code='' WHERE coa1.lvl_1_id IN (SELECT lvl_1_id FROM(SELECT coa1.lvl_1_id FROM coa_lvl_1 coa1 WHERE coa1.lvl_1_company='docpro' AND coa1.lvl_1_code='".$data['lvl_1_code']."') t) AND coa1.flag='1'");
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
	public static function acc_classification_get(){
		return self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa2.flag' => '1', 'coa2.lvl_2_company' => 'docpro'])->order_by('coa1.lvl_1_id', 'asc')->get()->result();
	}
	public static function acc_classification_add($data, $lvl_1_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa2.lvl_2_company='docpro' AND coa1.lvl_1_id='".$lvl_1_id."' ORDER BY CAST(coa2.lvl_2_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa2.lvl_2_id=coa12.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa2.lvl_2_company='docpro' AND coa1.lvl_1_id='".$lvl_1_id."' ORDER BY CAST(coa2.lvl_2_code AS DECIMAL) DESC LIMIT 1")->result();
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
		self::$db->query("UPDATE coa_lvl_2 coa2 SET coa2.lvl_2_code='' WHERE coa2.lvl_2_id IN (SELECT lvl_2_id FROM (SELECT coa2.lvl_2_id FROM coa_lvl_2 coa2 JOIN coalvl_1_2 coa12 ON coa12.lvl_2_id=coa2.lvl_2_id JOIN coa_lvl_1 coa1 ON coa1.lvl_1_id=coa12.lvl_1_id WHERE coa2.lvl_2_company='docpro' AND coa2.lvl_2_code='".$data['lvl_2_code']."' AND coa1.lvl_1_id='".$lvl_1_id."') t) AND coa2.flag='1'");
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
	public static function line_items_get(){
		return self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa3.flag' => '1', 'coa3.lvl_3_company' => 'docpro'])->get()->result();
	}
	public static function line_items_add($data, $lvl_2_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa3.lvl_3_id=coa23.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id WHERE coa3.lvl_3_company='docpro' AND coa2.lvl_2_id='".$lvl_2_id."' ORDER BY CAST(coa3.lvl_3_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa3.lvl_3_id=coa23.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id WHERE coa3.lvl_3_company='docpro' AND coa2.lvl_2_id='".$lvl_2_id."' ORDER BY CAST(coa3.lvl_3_code_int AS DECIMAL) DESC LIMIT 1")->result();
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
		self::$db->query("UPDATE coa_lvl_3 coa3 SET coa3.lvl_3_code='', coa3.lvl_3_code_int='' WHERE coa3.lvl_3_id IN (SELECT lvl_3_id FROM (SELECT coa3.lvl_3_id FROM coa_lvl_3 coa3 JOIN coalvl_2_3 coa23 ON coa23.lvl_3_id=coa3.lvl_3_id JOIN coa_lvl_2 coa2 ON coa2.lvl_2_id=coa23.lvl_2_id WHERE coa3.lvl_3_company='docpro' AND coa3.lvl_3_code='".$data['lvl_3_code']."' AND coa2.lvl_2_id='".$lvl_2_id."') t) AND coa3.flag='1'");
		$lvl_4_id = self::$db->query("(SELECT MIN(coa4.lvl_4_id) AS lvl_4_id FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."')")->result()[0]->lvl_4_id;
		$lvl_5_id = self::$db->query("(SELECT MIN(coa5.lvl_5_id) AS lvl_5_id FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."')")->result()[0]->lvl_5_id;
		$lvl_6_id = self::$db->query("(SELECT MIN(coa6.lvl_6_id) AS lvl_6_id FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id JOIN coa_lvl_5 coa5 ON coa5.lvl_5_id=coa56.lvl_5_id JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa3.lvl_3_id='".$lvl_3_id."')")->result()[0]->lvl_6_id;
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
	public static function acc_sub_get(){
		return self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa4.flag' => '1', 'coa4.lvl_4_company' => 'docpro'])->get()->result();
	}
	public static function acc_sub_add($data, $lvl_3_id, $user){
		$last_record_seq = self::$db->query("SELECT * FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa4.lvl_4_company='docpro' AND coa3.lvl_3_id='".$lvl_3_id."' ORDER BY CAST(coa4.lvl_4_seq AS DECIMAL) DESC LIMIT 1")->result();
		$last_record_code = self::$db->query("SELECT * FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa4.lvl_4_id=coa34.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa4.lvl_4_company='docpro' AND coa3.lvl_3_id='".$lvl_3_id."' ORDER BY CAST(coa4.lvl_4_code AS DECIMAL) DESC LIMIT 1")->result();
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
		self::$db->query("UPDATE coa_lvl_4 coa4 SET coa4.lvl_4_code='' WHERE coa4.lvl_4_id IN (SELECT lvl_4_id FROM (SELECT coa4.lvl_4_id FROM coa_lvl_4 coa4 JOIN coalvl_3_4 coa34 ON coa34.lvl_4_id=coa4.lvl_4_id JOIN coa_lvl_3 coa3 ON coa3.lvl_3_id=coa34.lvl_3_id WHERE coa4.lvl_4_company='docpro' AND coa4.lvl_4_code='".$data['lvl_4_code']."' AND coa3.lvl_3_id='".$lvl_3_id."') t) AND coa4.flag='1'");
		$lvl_5_id = self::$db->query("(SELECT MIN(coa5.lvl_5_id) AS lvl_5_id FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa4.lvl_4_id='".$lvl_4_id."')")->result()[0]->lvl_5_id;
		$lvl_6_id = self::$db->query("(SELECT MIN(coa6.lvl_6_id) AS lvl_6_id FROM coa_lvl_6 coa6 JOIN coalvl_5_6 coa56 ON coa56.lvl_6_id=coa6.lvl_6_id JOIN coa_lvl_5 coa5 ON coa5.lvl_5_id=coa56.lvl_5_id JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id JOIN coa_lvl_4 coa4 ON coa4.lvl_4_id=coa45.lvl_4_id WHERE coa4.lvl_4_id='".$lvl_4_id."')")->result()[0]->lvl_6_id;
		$coa4 = [
					'lvl_4_code' => $data['lvl_4_code'], 
					'lvl_4_name' => $data['lvl_4_name'],
					'bir' => $data['bir']
				];
		self::$db->where('lvl_4_id', $lvl_4_id)->update('coa_lvl_4', $coa4);
		self::$db->where('lvl_5_id', $lvl_5_id)->update('coa_lvl_5', ['lvl_5_name' => $data['lvl_4_name']]);
		self::$db->where('lvl_6_id', $lvl_6_id)->update('coa_lvl_6', ['lvl_6_name' => $data['lvl_4_name']]);
	}
	public static function acc_sub_delete($id){
		self::$db->where('lvl_4_id', $id)->update('coa_lvl_4', ['flag' => '0']);
	}

// CHART OF ACCOUNTS
	// public static function coa_get(){
	// 	return self::$db->from('coa')->join('coa_lvl_1 coalvl1', 'coalvl1.lvl_1_id = coa.lvl_1_id')->join('coa_lvl_2 coalvl2', 'coalvl2.lvl_2_id = coa.lvl_2_id')->join('coa_lvl_3 coalvl3', 'coalvl3.lvl_3_id = coa.lvl_3_id')->join('coa_lvl_4 coalvl4', 'coalvl4.lvl_4_id = coa.lvl_4_id')->join('coa_lvl_5 coalvl5', 'coalvl5.lvl_5_id = coa.lvl_5_id')->where(['coa.flag' => '1', 'coa.coa_company' => 'docpro'])->get()->result();
	// }
	// public static function coa_add($data){
	// 	self::$db->insert('coa', $data);
	// }
	// public static function coa_edit($id, $data){
	// 	self::$db->where('coa_id', $id)->update('coa', $data);
	// }
	// public static function coa_update($id, $data){
	// 	self::$db->where('coa_id', $id)->update(['flag' => '0']);
	// 	self::$db->insert('coa', $data);
	// }
	// public static function coa_delete($id){
	// 	self::$db->where('coa_id', $id)->update('coa', ['flag' => '0']);
	// }

// FILTER LELVEL
	public static function filter_lvl1(){
		return self::$db->get_where('coa_lvl_1', ['flag' => '1', 'lvl_1_company' => 'docpro'])->result();
	}
	public static function filter_lvl2($lvl_id){
		return self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa2.flag' => '1', 'coa2.lvl_2_company' => 'docpro', 'coa1.lvl_1_id' => $lvl_id])->get()->result();
	}
	public static function filter_lvl3($lvl_id){
		return self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->where(['coa3.flag' => '1', 'coa3.lvl_3_company' => 'docpro', 'coa2.lvl_2_id' => $lvl_id])->get()->result();
	}
	public static function filter_lvl4($lvl_id){
		return self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->where(['coa4.flag' => '1', 'coa4.lvl_4_company' => 'docpro', 'coa3.lvl_3_id' => $lvl_id])->get()->result();
	}
	public static function filter_lvl5($lvl_id){
		return self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa45.lvl_5_id = coa5.lvl_5_id')->join('coa_lvl_4 coa4', 'coa4.lvl_4_id = coa45.lvl_4_id')->where(['coa5.flag' => '1', 'coa5.lvl_5_company' => 'docpro', 'coa4.lvl_4_id' => $lvl_id])->get()->result();
	}
	public static function filter_lvl6($lvl_id){
		return self::$db->from('coa_lvl_6 coa6')->join('coalvl_5_6 coa56', 'coa56.lvl_6_id = coa6.lvl_6_id')->join('coa_lvl_5 coa5', 'coa5.lvl_5_id = coa56.lvl_5_id')->where(['coa6.flag' => '1', 'coa6.lvl_6_company' => 'docpro', 'coa5.lvl_5_id' => $lvl_id])->get()->result();
	}

// RELOAD TABLES
	public static function reload_lvl_2($lvl_1_id){
		return self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa2.flag' => '1', 'coa2.lvl_2_company' => 'docpro', 'coa1.lvl_1_id' => $lvl_1_id])->order_by('coa1.lvl_1_id', 'asc')->get()->result();
	}

	public static function reload_lvl_3($lvl_2_id){
		return self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa3.flag' => '1', 'coa3.lvl_3_company' => 'docpro', 'coa2.lvl_2_id' => $lvl_2_id])->get()->result();
	}

	public static function reload_lvl_4($lvl_3_id){
		return self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa34.lvl_4_id = coa4.lvl_4_id')->join('coa_lvl_3 coa3', 'coa3.lvl_3_id = coa34.lvl_3_id')->join('coalvl_2_3 coa23', 'coa23.lvl_3_id = coa3.lvl_3_id')->join('coa_lvl_2 coa2', 'coa2.lvl_2_id = coa23.lvl_2_id')->join('coalvl_1_2 coa12', 'coa12.lvl_2_id = coa2.lvl_2_id')->join('coa_lvl_1 coa1', 'coa1.lvl_1_id = coa12.lvl_1_id')->where(['coa4.flag' => '1', 'coa4.lvl_4_company' => 'docpro', 'coa3.lvl_3_id' => $lvl_3_id])->get()->result();
	}

	public static function coa_get_lvl5($lvl_4_id){
		return self::$db->query("SELECT * FROM coa_lvl_5 coa5 JOIN coalvl_4_5 coa45 ON coa45.lvl_5_id=coa5.lvl_5_id WHERE coa45.lvl_4_id='".$lvl_4_id."' AND coa5.flag='1' ORDER BY CAST(coa5.lvl_5_code AS DECIMAL) DESC LIMIT 1")->result();
	}
}
