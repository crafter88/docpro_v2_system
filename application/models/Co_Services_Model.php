<?php
class Co_Services_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function service_count($user){
        return count(self::$db->from('co_services cos')->join('co_profit_cost_centers copcc', 'cos.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cos.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cos.flag' => '1'])->get()->result());
    }
    public static function get($user){
        return self::$db->from('co_services cos')->join('co_profit_cost_centers copcc', 'cos.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cos.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cos.flag' => '1'])->get()->result();
    }
    
   public static function add($data, $user){
        $last_record_seq = self::$db->query("SELECT * FROM co_services cs JOIN co_departments cd ON cd.co_de_id=cs.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cs.co_s_seq AS DECIMAL) DESC LIMIT 1")->result();
        $last_record_code = self::$db->query("SELECT * FROM co_services cs JOIN co_departments cd ON cd.co_de_id=cs.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cs.co_s_code AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record_seq) > 0 ? (floatval($last_record_seq[0]->co_s_seq) + 1).'' : '1';
        $code = count($last_record_code) > 0 ? (floatval($last_record_code[0]->co_s_code) + 1).'' : '1';
        $data['co_s_seq'] = $seq;
        $data['co_s_code'] = $code;
        self::$db->insert('co_services', $data);

        return self::$db->insert_id();
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE co_services cs SET cs.co_s_code='' WHERE cs.co_s_id IN (SELECT co_s_id FROM(SELECT cs.co_s_id FROM co_services cs JOIN co_departments cd ON cd.co_de_id=cs.co_de_id WHERE cd.cb_id='".$user->cb_id."' AND cs.co_s_code='".$data['co_s_code']."') t) AND cs.flag='1'");
        self::$db->where(['co_s_id' => $id])->update('co_services', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE co_services cs SET cs.co_s_code='' WHERE cs.co_s_id IN (SELECT co_s_id FROM(SELECT cs.co_s_id FROM co_services cs JOIN co_departments cd ON cd.co_de_id=cs.co_de_id WHERE cd.cb_id='".$user->cb_id."' AND cs.co_s_code='".$data['co_s_code']."' AND cs.co_s_id != '".$id."') t) AND cs.flag='1'");
        $last_record = self::$db->query("SELECT * FROM co_services cs JOIN co_departments cd ON cd.co_de_id=cs.co_de_id WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cs.co_s_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->co_s_seq) + 1).'' : '1';
        $data['co_s_seq'] = $seq;
        self::$db->where(['co_s_id' => $id])->update('co_services', ['flag' => '0']);
        self::$db->insert('co_services', $data);

    }
    public static function get_departments($user){
        return self::$db->get_where('co_departments', ['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->result();
    }
    public static function get_profit_cost_center($user){
        return self::$db->from('co_profit_cost_centers cpcc')->join('co_departments cd', 'cd.co_de_id=cpcc.co_de_id')->where(['cd.cb_id' => $user->main_company->cb_id, 'cpcc.flag' => '1'])->get()->result();
    }
    public static function get_filter1($user){
        return self::$db->get_where('co_departments', ['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->result();
    }
    public static function get_filter2($user){
        return self::$db->from('co_profit_cost_centers cpcc')->join('co_departments cd', 'cd.co_de_id=cpcc.co_de_id')->where(['cd.cb_id' => $user->main_company->cb_id, 'cpcc.flag' => '1'])->get()->result();
    }
    public static function filter_table($user, $filter1, $filter2){
        if($filter1 && $filter2){
            return self::$db->from('co_services cos')->join('co_profit_cost_centers copcc', 'cos.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cos.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cos.flag' => '1', 'cod.co_de_id' => $filter1, 'copcc.co_pcc_id' => $filter2])->get()->result();
        }elseif($filter1){
            return self::$db->from('co_services cos')->join('co_profit_cost_centers copcc', 'cos.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cos.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cos.flag' => '1', 'cod.co_de_id' => $filter1])->get()->result();
        }elseif($filter2){
            return self::$db->from('co_services cos')->join('co_profit_cost_centers copcc', 'cos.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cos.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cos.flag' => '1','copcc.co_pcc_id' => $filter2])->get()->result();
        }else{
            return self::$db->from('co_services cos')->join('co_profit_cost_centers copcc', 'cos.co_pcc_id=copcc.co_pcc_id')->join('co_departments cod', 'cos.co_de_id=cod.co_de_id')->where(['cod.cb_id' => $user->main_company->cb_id, 'cos.flag' => '1'])->get()->result();
        }
    }
}