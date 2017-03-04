<?php
class Co_Banks_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function bank_count($user){
        return count(self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1'])->get()->result();
    }
    public static function add($bank, $co_bank, $user){
        $last_seq = self::$db->query("SELECT * FROM banks b JOIN co_banks cb ON cb.b_id=b.b_id WHERE cb.cb_id='".$user->cb_id."' ORDER BY CAST(b.b_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_code = self::$db->query("SELECT * FROM banks b JOIN co_banks cb ON cb.b_id=b.b_id WHERE cb.cb_id='".$user->cb_id."' ORDER BY CAST(b.b_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_seq) > 0 ? (floatval($last_seq[0]->b_seq) + 1).'' : '1';
        $code = count($last_code) > 0 ? (floatval($last_code[0]->b_code) + 1).'' : '1';
        $bank['b_seq'] = $seq;
        $bank['b_code'] = $code;
        self::$db->insert('banks', $bank);
        $b_id = self::$db->insert_id();
        $co_bank['b_id'] = $b_id;
        self::$db->insert('co_banks', $co_bank);
        return self::$db->insert_id();
    }
    public static function edit($bank, $co_bank, $b_id, $co_b_id, $user){
        self::$db->query("UPDATE banks b SET b.b_code='' WHERE b.b_id IN (SELECT b_id FROM(SELECT b.b_id FROM banks b JOIN co_banks cb ON cb.b_id=b.b_id WHERE cb.cb_id='".$user->cb_id."' AND b.b_code='".$bank['b_code']."') t) AND b.flag='1'");
        self::$db->where(['b_id' => $b_id])->update('banks', $bank);
        self::$db->where(['co_b_id' => $co_b_id])->update('co_banks', $co_bank);
    }
    public static function update($bank, $co_bank, $b_id, $co_b_id, $user){
        self::$db->query("UPDATE banks b SET b.b_code='' WHERE b.b_id IN (SELECT b_id FROM(SELECT b.b_id FROM banks b JOIN co_banks cb ON cb.b_id=b.b_id WHERE cb.cb_id='".$user->cb_id."' AND b.b_code='".$bank['b_code']."' AND b.b_id != '".$b_id."') t) AND b.flag='1'");
        $last_seq = self::$db->query("SELECT * FROM banks b JOIN co_banks cb ON cb.b_id=b.b_id WHERE cb.cb_id='".$user->cb_id."' ORDER BY CAST(b.b_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_seq) > 0 ? (floatval($last_seq[0]->b_seq) + 1).'' : '1';
        $bank['b_seq'] = $seq;
        self::$db->where(['b_id' => $b_id])->update('banks', ['flag' => '0']);
        self::$db->insert('banks', $bank);
        $b_id = self::$db->insert_id();
        $co_bank['b_id'] = $b_id;
        self::$db->insert('co_banks', $co_bank);
    }
    public static function get_filter1($user, $filter2){
        if($filter2){
            return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1', 'cb.co_b_class' => $filter2])->get()->result();
        }
        return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1'])->get()->result();
    }
    public static function get_filter2($user, $filter1){
        if($filter1){
            return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1', 'b.b_name' => $filter1])->get()->result();
        }
        return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1'])->get()->result();
    }
    public static function filter_table($user, $filter1, $filter2){
        if($filter1 && $filter2){
            return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1', 'b.b_name' => $filter1, 'cb.co_b_class' => $filter2])->get()->result();
        }elseif($filter1){
            return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1', 'b.b_name' => $filter1])->get()->result();
        }elseif($filter2){
            return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1', 'cb.co_b_class' => $filter2])->get()->result();
        }else{
            return self::$db->from('banks b')->join('co_banks cb', 'cb.b_id=b.b_id')->where(['cb.cb_id' => $user->main_company->cb_id, 'b.flag' => '1'])->get()->result();
        }
        
    }
}