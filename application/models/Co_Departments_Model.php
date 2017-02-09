<?php
class Co_Departments_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function department_count($user){
        return count(self::$db->from('co_departments')->where(['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('co_departments')->where(['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->get()->result();
    }    
    public static function add($data, $user){
        $last_record_seq = self::$db->query("SELECT * FROM co_departments cde WHERE cde.cb_id='".$user->cb_id."' ORDER BY CAST(cde.co_de_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_record_code = self::$db->query("SELECT * FROM co_departments cde WHERE cde.cb_id='".$user->cb_id."' ORDER BY CAST(cde.co_de_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->co_de_seq) + 1).'' : '1';
        $code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->co_de_code) + 1).'' : '1';
        $data['co_de_seq'] = $seq;
        $data['co_de_code'] = $code;
        self::$db->insert('co_departments', $data);
        return self::$db->insert_id();
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE co_departments cde SET cde.co_de_code='' WHERE cde.co_de_id IN (SELECT co_de_id FROM(SELECT cde.co_de_id FROM co_departments cde WHERE cde.cb_id='".$user->cb_id."' AND cde.co_de_code='".$data['co_de_code']."') t) AND cde.flag='1'");
        self::$db->where('co_de_id' , $id)->update('co_departments', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE co_departments cde SET cde.co_de_code='' WHERE cde.co_de_id IN (SELECT co_de_id FROM(SELECT cde.co_de_id FROM co_departments cde WHERE cde.cb_id='".$user->cb_id."' AND cde.co_de_code='".$data['co_de_code']."' AND cde.co_de_id != '".$id."') t) AND cde.flag='1'");
        $last_record = self::$db->query("SELECT * FROM co_departments cde WHERE cde.cb_id='".$user->cb_id."' ORDER BY CAST(cde.co_de_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->co_de_seq) + 1).'' : '1';
        $data['co_de_seq'] = $seq;
        self::$db->where('co_de_id', $id)->update('co_departments', ['flag' => '0']);
        self::$db->insert('co_departments', $data);

    }
}