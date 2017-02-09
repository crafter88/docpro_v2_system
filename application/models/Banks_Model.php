<?php
class Banks_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function bank_count(){
        return count(self::$db->get_where('banks', ['b_company' => 'docpro', 'flag' => '1'])->result());
    }
    public static function get(){
        return self::$db->get_where('banks', ['flag' => '1', 'b_company' => 'docpro'])->result();
    }
    public static function add($data){
        $last_record_seq = self::$db->query("SELECT * FROM banks WHERE b_company='docpro' ORDER BY CAST(b_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_record_code = self::$db->query("SELECT * FROM banks WHERE b_company='docpro' ORDER BY CAST(b_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->b_seq) + 1).'' : '1';
        $code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->b_code) + 1).'' : '1';
        $data['b_seq'] = $seq;
        $data['b_code'] = $code;
        self::$db->insert('banks', $data);
    }
    public static function edit($data, $id){
        self::$db->query("UPDATE banks b SET b.b_code='' WHERE b_id IN (SELECT b_id FROM(SELECT b.b_id FROM banks b WHERE b.b_company='docpro' AND b.b_code='".$data['b_code']."') t) AND b.flag='1'");
        self::$db->where('b_id', $id)->update('banks', $data);
    }
    public static function update($data, $id){
        self::$db->query("UPDATE banks b SET b.b_code='' WHERE b_id IN (SELECT b_id FROM(SELECT b.b_id FROM banks b WHERE b.b_company='docpro' AND b.b_code='".$data['b_code']."' AND b.b_id != '".$id."') t) AND b.flag='1'");
        self::$db->where('b_id', $id)->update('banks', ['flag' => '0']);
        $last_record_seq = self::$db->query("SELECT * FROM banks WHERE b_company='docpro' ORDER BY CAST(b_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->b_seq) + 1).'' : '1';
        $data['b_seq'] = $seq;
        self::$db->insert('banks', $data);
    }
}