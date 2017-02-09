<?php
class Co_Profit_Cost_Centers_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function pcc_count($user){
        return count(self::$db->from('co_profit_cost_centers copcc')->join('co_departments cod', 'copcc.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'copcc.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('co_profit_cost_centers copcc')->join('co_departments cod', 'copcc.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'copcc.flag' => '1'])->get()->result();
    }
    
    public static function add($data, $user){
        $last_record_seq = self::$db->query("SELECT * FROM co_profit_cost_centers cpcc JOIN co_departments cd ON cd.co_de_id=cpcc.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cpcc.co_pcc_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_record_code = self::$db->query("SELECT * FROM co_profit_cost_centers cpcc JOIN co_departments cd ON cd.co_de_id=cpcc.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cpcc.co_pcc_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->co_pcc_seq) + 1).'' : '1';
        $code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->co_pcc_code) + 1).'' : '1';
        $data['co_pcc_seq'] = $seq;
        $data['co_pcc_code'] = $code;
        self::$db->insert('co_profit_cost_centers', $data);
        return self::$db->insert_id();
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE co_profit_cost_centers cpcc SET cpcc.co_pcc_code='' WHERE cpcc.co_pcc_id IN (SELECT co_pcc_id FROM(SELECT cpcc.co_pcc_id FROM co_profit_cost_centers cpcc JOIN co_departments cd ON cd.co_de_id=cpcc.co_de_id WHERE cd.cb_id='".$user->cb_id."' AND cpcc.co_pcc_code='".$data['co_pcc_code']."') t) AND cpcc.flag='1'");
        self::$db->where('co_pcc_id', $id)->update('co_profit_cost_centers', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE co_profit_cost_centers cpcc SET cpcc.co_pcc_code='' WHERE cpcc.co_pcc_id IN (SELECT co_pcc_id FROM(SELECT cpcc.co_pcc_id FROM co_profit_cost_centers cpcc JOIN co_departments cd ON cd.co_de_id=cpcc.co_de_id WHERE cd.cb_id='".$user->cb_id."' AND cpcc.co_pcc_code='".$data['co_pcc_code']."' AND cpcc.co_pcc_id != '".$id."') t) AND cpcc.flag='1'");
        $last_record = self::$db->query("SELECT * FROM co_profit_cost_centers cpcc JOIN co_departments cd ON cd.co_de_id=cpcc.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cpcc.co_pcc_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->co_pcc_seq) + 1).'' : '1';
        $data['co_pcc_seq'] = $seq;
        self::$db->where('co_pcc_id', $id)->update('co_profit_cost_centers', ['flag' => '0']);
        self::$db->insert('co_profit_cost_centers', $data);
    }
    public static function get_departments($user){
        return self::$db->get_where('co_departments', ['cb_id' => $user->cb_id, 'flag' => '1'])->result();
    }
}