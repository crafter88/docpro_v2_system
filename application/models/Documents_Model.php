<?php
class Documents_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function documents_count(){
        return count(self::$db->get_where('documents', ['d_company' => 'docpro', 'flag' => '1'])->result());
    }
    public static function get($user){
        return self::$db->from('documents d')->join('journals j', 'j.j_id=d.j_id')->where(['d.d_company' => 'docpro', 'd.flag' => '1'])->get()->result();
    }
    public static function add($data, $j_code, $user){
       $last_record = self::$db->query("SELECT * FROM documents WHERE d_company='docpro' ORDER BY CAST(d_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->d_seq) + 1).'' : '1';
        $data['d_seq'] = $seq;
        $data['d_code'] = $j_code.''.$seq;
        self::$db->insert('documents', $data);
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE documents d SET d.d_code='' WHERE d.d_id IN (SELECT d_id FROM(SELECT d.d_id FROM documents d WHERE d.d_company='docpro' AND d.d_code='".$data['d_code']."' AND d.d_id != '".$id."') t) AND d.flag='1'");
        self::$db->where('d_id', $id)->update('documents', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE documents d SET d.d_code='' WHERE d.d_id IN (SELECT d_id FROM(SELECT d.d_id FROM documents d WHERE d.d_company='docpro' AND d.d_code='".$data['d_code']."' AND d.d_id != '".$id."') t) AND d.flag='1'");
        $last_record = self::$db->query("SELECT * FROM documents WHERE d_company='docpro' ORDER BY CAST(d_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->d_seq) + 1).'' : '1';
        $data['d_seq'] = $seq;
        self::$db->where('d_id', $id)->update('documents', ['flag' => '0']);
        self::$db->insert('documents', $data);
    }
    public static function get_journals($user){
        return self::$db->get_where('journals', ['flag' => '1', 'j_company' => 'docpro'])->result();
    }
}