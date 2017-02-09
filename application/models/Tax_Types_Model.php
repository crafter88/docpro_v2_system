<?php
class Tax_Types_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function tax_types_count(){
        return count(self::$db->get_where('tax_types', ['tt_company' => 'docpro', 'flag' => '1'])->result());
    }
    public static function get(){
        return self::$db->get_where('tax_types', ['tt_company' => 'docpro', 'flag' => '1'])->result();
    }
    public static function add($data){
        $last_record = self::$db->query("SELECT * FROM tax_types WHERE tt_company='docpro' ORDER BY CAST(tt_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->tt_seq) + 1).'' : '1';
        $code = count($last_record) > 0 ? (floatval($last_record[0]->tt_code) + 1).'' : '1';
    	self::$db->insert('tax_types', ['tt_seq' => $seq, 'tt_code' => $code, 'tt_name' => $data['tt_name'], 'tt_shortname' => $data['tt_shortname'], 'tt_company' => $data['tt_company'], 'tt_setup_company' => $data['tt_setup_company']]);
    }
    public static function edit($id, $data){
        self::$db->query("UPDATE tax_types tt SET tt.tt_code='' WHERE tt.tt_id IN (SELECT tt_id FROM(SELECT tt.tt_id FROM tax_types tt WHERE tt.tt_code='".$data['tt_code']."' AND tt.tt_company='docpro') t) AND tt.flag='1'");
    	self::$db->where('tt_id', $id)->update('tax_types', $data);
    }
    public static function update($id, $data){
        $original = self::$db->get_where('tax_types', ['tt_id' => $id])->result();
    	self::$db->where('tt_id', $id)->update('tax_types', ['flag' => '0']);
    	self::$db->insert('tax_types', ['tt_seq' =>  $original[0]->tt_seq, 'tt_code' => $original[0]->tt_code, 'tt_name' => $data['tt_name'], 'tt_shortname' => $data['tt_shortname'], 'tt_company' => $data['tt_company'], 'tt_setup_company' => $data['tt_setup_company']]);
    }
    public static function delete($tt_id){
        self::$db->where('tt_id', $tt_id)->update('tax_types', ['flag' => '0']);
    }
}