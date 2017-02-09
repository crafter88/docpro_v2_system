<?php
class Co_Taxes_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
     public static function get($user){
        return self::$db->from('taxes t')->join('tax_types tt', 't.tt_id=tt.tt_id')->join('co_taxes cot', 'cot.t_id=t.t_id')->where(['cot.cb_id' => $user->main_company->cb_id, 't.flag' => '1'])->get()->result();
    }
    public static function get_list($tt_id, $user){
        return self::$db->select('tt.*, t.*, t.status AS tax_status')->from('taxes t')->join('tax_types tt', 't.tt_id=tt.tt_id')->join('co_taxes cot', 'cot.t_id=t.t_id')->where(['cot.cb_id' => $user->main_company->cb_id, 'tt.tt_id' => $tt_id, 't.flag' => '1'])->get()->result();
    }
    public static function get_tax_types($user){
        return self::$db->from('tax_types tt')->join('co_tax_types cott', 'cott.tt_id=tt.tt_id')->where(['cott.cb_id' => $user->main_company->cb_id, 'tt.flag' => '1'])->get()->result();
    }
    public static function add($data, $tt_code, $user){
        $last_record = self::$db->query("SELECT * FROM taxes t JOIN co_taxes ct ON ct.t_id=t.t_id WHERE ct.cb_id='".$user->cb_id."' AND t.tt_id='".$data['tt_id']."' ORDER BY CAST(t.t_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->t_seq) + 1).'' : '1';
        $data['t_seq'] = $seq;
        $data['t_code'] = $tt_code.''.$seq;
        self::$db->insert('taxes', $data);
        $t_id = self::$db->insert_id();
        self::$db->insert('co_taxes', ['t_id' => $t_id, 'cb_id' => $user->cb_id]);
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE taxes t SET t.t_code='' WHERE t.t_id IN (SELECT t_id FROM(SELECT t.t_id FROM taxes t JOIN co_taxes ct ON ct.t_id=t.t_id WHERE ct.cb_id='".$user->cb_id."' AND t.tt_id='".$data['tt_id']."' AND t.t_code='".$data['t_code']."') t) AND t.flag='1'");
        self::$db->where(['t_id' => $id])->update('taxes', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE taxes t SET t.t_code='' WHERE t.t_id IN (SELECT t_id FROM(SELECT t.t_id FROM taxes t JOIN co_taxes ct ON ct.t_id=t.t_id WHERE ct.cb_id='".$user->cb_id."' AND t.tt_id='".$data['tt_id']."' AND t.t_code='".$data['t_code']."' AND t.t_id != '".$id."') t) AND t.flag='1'");
        $last_record = self::$db->query("SELECT * FROM taxes t JOIN co_taxes ct ON ct.t_id=t.t_id WHERE ct.cb_id='".$user->cb_id."' AND t.tt_id='".$data['tt_id']."' ORDER BY CAST(t.t_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->t_seq) + 1).'' : '1';
        $data['t_seq'] = $seq;
        self::$db->where(['t_id' => $id])->update('taxes', ['flag' => '0']);
        self::$db->insert('taxes', $data);
        $t_id = self::$db->insert_id();
        self::$db->insert('co_taxes', ['t_id' => $t_id, 'cb_id' => $user->cb_id]);
    }
    public static function delete($t_id){
        self::$db->where('t_id', $t_id)->update('taxes', ['flag' => '0']);
    }

    public static function enable_tax($id){
        self::$db->where(['t_id' => $id])->update('taxes', ['status' => '1']);
    }
    public static function disable_tax($id){
        self::$db->where(['t_id' => $id])->update('taxes', ['status' => '0']);
    }
}