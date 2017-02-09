<?php
class Co_Documents_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function document_count($user){
        return count(self::$db->from('documents d')->join('co_documents cod', 'cod.d_id=d.d_id')->join('journals j', 'j.j_id=d.j_id')->where(['d.flag' => '1', 'cb_id' => $user->main_company->cb_id])->get()->result());
    }
    public static function get($user){
       return self::$db->from('documents d')->join('co_documents cod', 'cod.d_id=d.d_id')->join('journals j', 'j.j_id=d.j_id')->where(['d.flag' => '1', 'cb_id' => $user->main_company->cb_id])->get()->result();
    }
    public static function add($data, $j_code, $user){
        $last_record = self::$db->query("SELECT * FROM documents d JOIN co_documents cod ON cod.d_id=d.d_id WHERE cod.cb_id='".$user->cb_id."' ORDER BY CAST(d.d_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->d_seq) + 1).'' : '1';
        $data['d_seq'] = $seq;
        $data['d_code'] = $j_code.''.$seq;
        self::$db->insert('documents', $data);
        $d_id = self::$db->insert_id();
        self::$db->insert('co_documents', ['d_id' => $d_id, 'cb_id' => $user->cb_id]);
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE documents d SET d.d_code='' WHERE d.d_id IN (SELECT d_id FROM(SELECT d.d_id FROM documents d JOIN co_documents cod ON cod.d_id=d.d_id WHERE cod.cb_id='".$user->cb_id."' AND d.d_code='".$data['d_code']."' AND d.d_id != '".$id."') t) AND d.flag='1'");
        self::$db->where('d_id', $id)->update('documents', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE documents d SET d.d_code='' WHERE d.d_id IN (SELECT d_id FROM(SELECT d.d_id FROM documents d JOIN co_documents cod ON cod.d_id=d.d_id WHERE cod.cb_id='".$user->cb_id."' AND d.d_code='".$data['d_code']."' AND d.d_id != '".$id."') t) AND d.flag='1'");
        $last_record = self::$db->query("SELECT * FROM documents d JOIN co_documents cod ON cod.d_id=d.d_id WHERE cod.cb_id='".$user->cb_id."' ORDER BY CAST(d.d_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->d_seq) + 1).'' : '1';
        $data['d_seq'] = $seq;
        self::$db->where('d_id', $id)->update('documents', ['flag' => '0']);
        self::$db->insert('documents', $data);
        $d_id = self::$db->insert_id();
        self::$db->insert('co_documents', ['d_id' => $d_id, 'cb_id' => $user->cb_id]);
    }
    public static function get_journals($user){
        return self::$db->from('journals j')->join('co_journals coj', 'coj.j_id=j.j_id')->where(['j.flag' => '1', 'coj.cb_id' => $user->cb_id])->get()->result();
    }
}