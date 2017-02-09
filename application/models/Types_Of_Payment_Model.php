<?php
class Types_Of_Payment_model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->get_where('types_of_payment', ['top_company' => 'docpro', 'flag' => '1'])->result();
    }
    public static function add($data){
        $last_record = self::$db->query("SELECT * FROM types_of_payment WHERE flag='1' AND top_company='docpro' ORDER BY CAST(top_code AS DECIMAL) DESC LIMIT 1")->result();
        $code = count($last_record) > 0 ? (floatval($last_record[0]->top_code) + 1).'' : '1';
    	self::$db->insert('types_of_payment', ['top_code' => $code, 'top_type' => $data['top_type'], 'top_company' => $data['top_company']]);
    }
    public static function edit($top_id, $data){
    	self::$db->where('top_id', $top_id)->update('types_of_payment', $data);
    }
    public static function update($top_id, $data){
        $original = self::$db->get_where('types_of_payment', ['top_id' => $top_id])->result();
    	self::$db->where('top_id', $top_id)->update('types_of_payment', ['flag' => '0']);
    	self::$db->insert('types_of_payment', ['top_code' => $original[0]->top_code, 'top_type' => $data['top_type'], 'top_company' => $data['top_company']]);
    }
}