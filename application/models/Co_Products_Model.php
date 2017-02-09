<?php
class Co_Products_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function product_count($user){
        return count(self::$db->from('co_products cop')->join('co_profit_cost_centers copcc', 'cop.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cop.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cop.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('co_products cop')->join('co_profit_cost_centers copcc', 'cop.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cop.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cop.flag' => '1'])->get()->result();
    }
    
    public static function add($data, $user){
        $last_record_seq = self::$db->query("SELECT * FROM co_products cp JOIN co_departments cd ON cd.co_de_id=cp.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cp.co_p_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_record_code = self::$db->query("SELECT * FROM co_products cp JOIN co_departments cd ON cd.co_de_id=cp.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cp.co_p_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->co_p_seq) + 1).'' : '1';
        $code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->co_p_code) + 1).'' : '1';
        $data['co_p_seq'] = $seq;
        $data['co_p_code'] = $code;
        self::$db->insert('co_products', $data);
        return self::$db->insert_id();
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE co_products cp SET cp.co_p_code='' WHERE cp.co_p_id IN (SELECT co_p_id FROM(SELECT cp.co_p_id FROM co_products cp JOIN co_departments cd ON cd.co_de_id=cp.co_de_id WHERE cd.cb_id='".$user->cb_id."' AND cp.co_p_code='".$data['co_p_code']."') t) AND cp.flag='1'");
        self::$db->where(['co_p_id' => $id])->update('co_products', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE co_products cp SET cp.co_p_code='' WHERE cp.co_p_id IN (SELECT co_p_id FROM(SELECT cp.co_p_id FROM co_products cp JOIN co_departments cd ON cd.co_de_id=cp.co_de_id WHERE cd.cb_id='".$user->cb_id."' AND cp.co_p_code='".$data['co_p_code']."' AND cp.co_p_id != '".$id."') t) AND cp.flag='1'");
        $last_record = self::$db->query("SELECT * FROM co_products cp JOIN co_departments cd ON cd.co_de_id=cp.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cp.co_p_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->co_p_seq) + 1).'' : '1';
        $data['co_p_seq'] = $seq;
        self::$db->where(['co_p_id' => $id])->update('co_products', ['flag' => '0']);
        self::$db->insert('co_products', $data);

    }
    public static function get_departments($user){
        return self::$db->get_where('co_departments', ['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->result();
    }
    public static function get_profit_cost_center($user){
        return self::$db->from('co_profit_cost_centers cpcc')->join('co_departments cd', 'cd.co_de_id=cpcc.co_de_id')->where(['cd.cb_id' => $user->main_company->cb_id, 'cpcc.flag' => '1'])->get()->result();
    }
}