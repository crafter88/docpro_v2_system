<?php
class Journals_Model extends CI_Model{
    private static $db;

    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function journal_count(){
        return count(self::$db->get_where('journals', ['j_company' => 'docpro', 'flag' => '1'])->result());
    }

    public static function get(){
        return self::$db->where(['j_company' => 'docpro', 'flag' => '1'])->get('journals')->result();
    }

    public static function add($data){
        $last_record = self::$db->query("SELECT * FROM journals WHERE j_company='docpro' ORDER BY CAST(j_code AS DECIMAL) DESC LIMIT 1")->result();
        $code = count($last_record) > 0 ? (floatval($last_record[0]->j_code) + 1).'' : '1';
        $data['j_code'] = $code;
    	self::$db->insert('journals', $data);
    }

    public static function edit($data, $id){
        self::$db->query("UPDATE journals j SET j.j_code='' WHERE j.j_id IN (SELECT j_id FROM(SELECT j.j_id FROM journals j WHERE j.j_company='docpro' AND j.j_code='".$data['j_code']."') t) AND j.flag='1'");
    	self::$db->where('j_id', $id)->update('journals', $data);
    }

    public static function update($data, $id){
        self::$db->query("UPDATE journals j SET j.j_code='' WHERE j.j_id IN (SELECT j_id FROM(SELECT j.j_id FROM journals j WHERE j.j_company='docpro' AND j.j_code='".$data['j_code']."' AND j.j_id != '".$id."') t) AND j.flag='1'");
        self::$db->where('j_id', $id)->update('journals', ['flag' => '0']);
        self::$db->insert('journals', $data);
    }
}