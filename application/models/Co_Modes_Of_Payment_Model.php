<?php
class Co_Modes_Of_Payment_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function mop_count($user){
        return count(self::$db->from('modes_of_payment mop')->join('types_of_payment top', 'mop.top_id=top.top_id')->join('co_modes_of_payment comop', 'comop.mop_id=mop.mop_id')->where(['comop.cb_id' => $user->main_company->cb_id, 'mop.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('modes_of_payment mop')->join('types_of_payment top', 'mop.top_id=top.top_id')->join('co_modes_of_payment comop', 'comop.mop_id=mop.mop_id')->where(['comop.cb_id' => $user->main_company->cb_id, 'mop.flag' => '1'])->get()->result();
    }

    public static function add($data, $user){
        $last_record = self::$db->query("SELECT * FROM modes_of_payment mop JOIN co_modes_of_payment comop ON comop.mop_id=mop.mop_id WHERE comop.cb_id='".$user->cb_id."' ORDER BY CAST(mop.mop_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->mop_seq) + 1).'' : '1';
        $data['mop_seq'] = $seq;
        $data['mop_code'] = $data['top_id'].''.$seq;
        self::$db->insert('modes_of_payment', $data);
        $mop_id = self::$db->insert_id();
        self::$db->insert('co_modes_of_payment', ['mop_id' => $mop_id, 'cb_id' => $user->cb_id]);
        return self::$db->insert_id();
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE modes_of_payment mop SET mop.mop_code='' WHERE mop.mop_id IN (SELECT mop_id FROM(SELECT mop.mop_id FROM modes_of_payment mop JOIN co_modes_of_payment comop ON comop.mop_id=mop.mop_id WHERE comop.cb_id='".$user->cb_id."' AND mop.mop_code='".$data['mop_code']."') t) AND mop.flag='1'");
        self::$db->where(['mop_id' => $id])->update('modes_of_payment', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE modes_of_payment mop SET mop.mop_code='' WHERE mop.mop_id IN (SELECT mop_id FROM(SELECT mop.mop_id FROM modes_of_payment mop JOIN co_modes_of_payment comop ON comop.mop_id=mop.mop_id WHERE comop.cb_id='".$user->cb_id."' AND mop.mop_code='".$data['mop_code']."' AND mop.mop_id != '".$id."') t) AND mop.flag='1'");
        self::$db->where(['mop_id' => $id])->update('modes_of_payment', ['flag' => '0']);
        $last_record = self::$db->query("SELECT * FROM modes_of_payment mop JOIN co_modes_of_payment comop ON comop.mop_id=mop.mop_id WHERE comop.cb_id='".$user->cb_id."' ORDER BY CAST(mop.mop_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->mop_seq) + 1).'' : '1';
        $data['mop_seq'] = $seq;
        self::$db->insert('modes_of_payment', $data);
        $mop_id = self::$db->insert_id();
        self::$db->insert('co_modes_of_payment', ['mop_id' => $mop_id, 'cb_id' => $user->cb_id]);
    }
    public static function get_types_of_payment(){
        return self::$db->get('types_of_payment')->result();
    }
    public static function get_filter1(){
        return self::$db->get_where('types_of_payment', ['flag' => '1'])->result();
    }
    public static function filter_table($user, $filter1){
        if($filter1){
            return self::$db->from('modes_of_payment mop')->join('types_of_payment top', 'mop.top_id=top.top_id')->join('co_modes_of_payment comop', 'comop.mop_id=mop.mop_id')->where(['comop.cb_id' => $user->main_company->cb_id, 'mop.flag' => '1', 'top.top_id' => $filter1])->get()->result();
        }
        return self::$db->from('modes_of_payment mop')->join('types_of_payment top', 'mop.top_id=top.top_id')->join('co_modes_of_payment comop', 'comop.mop_id=mop.mop_id')->where(['comop.cb_id' => $user->main_company->cb_id, 'mop.flag' => '1'])->get()->result();
        
    }
}