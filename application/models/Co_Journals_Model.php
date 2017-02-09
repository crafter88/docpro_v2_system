<?php
class Co_Journals_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function journal_count($user){
        return count(self::$db->from('journals j')->join('co_journals cj', 'cj.j_id = j.j_id')->where(['cj.cb_id' => $user->main_company->cb_id, 'j.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('journals j')->join('co_journals cj', 'cj.j_id = j.j_id')->where(['cj.cb_id' => $user->main_company->cb_id, 'j.flag' => '1'])->get()->result();
    }
    
    public static function add($data, $user){
        $last_record = self::$db->query("SELECT * FROM journals j JOIN co_journals cj ON j.j_id=cj.j_id WHERE cj.cb_id='".$user->cb_id."' ORDER BY CAST(j.j_code AS DECIMAL) DESC LIMIT 1")->result();
        $code = count($last_record) > 0 ? floatval($last_record[0]->j_code + 1).'' : '1';
        $data['j_code'] = $code;
        self::$db->insert('journals', $data);
        $j_id = self::$db->insert_id();
        self::$db->insert('co_journals', ['j_id' => $j_id, 'cb_id' => $user->cb_id]);
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE journals j SET j.j_code='' WHERE j.j_id IN(SELECT j_id FROM(SELECT j.j_id FROM journals j JOIN co_journals cj ON j.j_id=cj.j_id WHERE cj.cb_id='".$user->cb_id."' AND j_code='".$data['j_code']."') t) AND j.flag='1'");
        self::$db->where('j_id', $id)->update('journals', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE journals j SET j.j_code='' WHERE j.j_id IN(SELECT j_id FROM(SELECT j.j_id FROM journals j JOIN co_journals cj ON j.j_id=cj.j_id WHERE cj.cb_id='".$user->cb_id."' AND j_code='".$data['j_code']."' AND j.j_id != '".$id."') t) AND j.flag='1'");
        self::$db->where(['j_id' => $id])->update('journals', ['flag' => '0']);
        self::$db->insert('journals', $data);
        $j_id = self::$db->insert_id();
        self::$db->insert('co_journals', ['j_id' => $j_id, 'cb_id' => $user->cb_id]);
    }
}