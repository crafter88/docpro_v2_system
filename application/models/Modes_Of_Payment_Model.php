<?php
class Modes_Of_Payment_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function mop_count(){
        return count(self::$db->get_where('modes_of_payment', ['mop_company' => 'docpro', 'flag' => '1'])->result());
    }
    public static function get(){
		// return self::$db->query("SELECT * FROM modes_of_payment")->result();
        return self::$db->from('modes_of_payment mop')->join('types_of_payment top', 'mop.top_id=top.top_id')->where(['mop.mop_company' => 'docpro', 'mop.flag' => '1'])->get()->result();
    }
    public static function add($data){
        $last_record = self::$db->query("SELECT * FROM modes_of_payment WHERE mop_company='docpro' ORDER BY CAST(mop_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->mop_seq) + 1).'' : '1';
        $data['mop_seq'] = $seq;
        $data['mop_code'] = $data['top_id'].''.$seq;
        self::$db->insert('modes_of_payment', $data);
    }
    public static function edit($data, $id){
        self::$db->query("UPDATE modes_of_payment mop SET mop.mop_code='' WHERE mop.mop_id IN (SELECT mop_id FROM(SELECT mop.mop_id FROM modes_of_payment mop WHERE mop.mop_company='docpro' AND mop.mop_code='".$data['mop_code']."') t) AND mop.flag='1'");
        self::$db->where(['mop_id' => $id])->update('modes_of_payment', $data);
    }
    public static function update($data, $id){
        self::$db->query("UPDATE modes_of_payment mop SET mop.mop_code='' WHERE mop.mop_id IN (SELECT mop_id FROM(SELECT mop.mop_id FROM modes_of_payment mop WHERE mop.mop_company='docpro' AND mop.mop_code='".$data['mop_code']."' AND mop.mop_id != '".$id."') t) AND mop.flag='1'");
        self::$db->where(['mop_id' => $id])->update('modes_of_payment', ['flag' => '0']);
        $last_record = self::$db->query("SELECT * FROM modes_of_payment WHERE mop_company='docpro' ORDER BY CAST(mop_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->mop_seq) + 1).'' : '1';
        $data['mop_seq'] = $seq;
        self::$db->insert('modes_of_payment', $data);
    }
    public static function get_top(){
        return self::$db->get_where('types_of_payment', ['flag' => '1'])->result();
    }
}