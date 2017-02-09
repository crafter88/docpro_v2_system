<?php
class Co_Tax_Types_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function tax_type_count($user){
        return count(self::$db->from('tax_types tt')->join('co_tax_types cott', 'cott.tt_id=tt.tt_id')->where(['cott.cb_id' => $user->cb_id, 'tt.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('tax_types tt')->join('co_tax_types cott', 'cott.tt_id=tt.tt_id')->where(['cott.cb_id' => $user->cb_id, 'tt.flag' => '1'])->get()->result();
    }
    public static function add($data, $user){
        $last_record_seq = self::$db->query("SELECT * FROM tax_types tt JOIN co_tax_types cott ON cott.tt_id=tt.tt_id WHERE cott.cb_id='".$user->cb_id."' ORDER BY CAST(tt.tt_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_record_code = self::$db->query("SELECT * FROM tax_types tt JOIN co_tax_types cott ON cott.tt_id=tt.tt_id WHERE cott.cb_id='".$user->cb_id."' ORDER BY CAST(tt.tt_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->tt_seq) + 1).'' : '1';
        $code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->tt_code) + 1).'' : '1';
        $data['tt_seq'] = $seq;
        $data['tt_code'] = $code;
    	self::$db->insert('tax_types', $data);
        $tt_id = self::$db->insert_id();
        self::$db->insert('co_tax_types', ['tt_id' => $tt_id, 'cb_id' => $user->cb_id]);
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE tax_types tt SET tt.tt_code='' WHERE tt.tt_id IN (SELECT tt_id FROM(SELECT tt.tt_id FROM tax_types tt JOIN co_tax_types cott ON cott.tt_id=tt.tt_id WHERE cott.cb_id='".$user->cb_id."' AND tt.tt_code='".$data['tt_code']."') t) AND tt.flag='1'");
    	self::$db->where('tt_id', $id)->update('tax_types', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE tax_types tt SET tt.tt_code='' WHERE tt.tt_id IN (SELECT tt_id FROM(SELECT tt.tt_id FROM tax_types tt JOIN co_tax_types cott ON cott.tt_id=tt.tt_id WHERE cott.cb_id='".$user->cb_id."' AND tt.tt_code='".$data['tt_code']."' AND tt.tt_id != '".$id."') t) AND tt.flag='1'");
        $last_record = self::$db->query("SELECT * FROM tax_types tt JOIN co_tax_types cott ON cott.tt_id=tt.tt_id WHERE cott.cb_id='".$user->cb_id."' ORDER BY CAST(tt.tt_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->tt_seq) + 1).'' : '1';
        $data['tt_seq'] = $seq;
        self::$db->where(['tt_id' => $id])->update('tax_types', ['flag' => '0']);
        self::$db->insert('tax_types', $data);
        $tt_id = self::$db->insert_id();
        self::$db->insert('co_tax_types', ['tt_id' => $tt_id, 'cb_id' => $user->cb_id]);
    }
    public static function delete($tt_id){
        self::$db->where('tt_id', $tt_id)->update('tax_types', ['flag' => '0']);
    }

    public static function enable_tax_type($id){
        self::$db->where(['tt_id' => $id])->update('tax_types', ['status' => '1']);
    }

    public static function disable_tax_type($id){
        self::$db->where(['tt_id' => $id])->update('tax_types', ['status' => '0']);
    }
}