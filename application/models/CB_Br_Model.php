<?php
class CB_Br_Model extends CI_Model{
    private static $db;

    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function branch_count($user){
        $mcb_id = $user->main_company->cb_id;
        return count(self::$db->from('cb_br cbbr')->join('company_history ch', 'cbbr.br_id = ch.ch_cb_id')->where('cbbr.cb_id', $mcb_id)->where('cbbr.br_id !=', $mcb_id)->where(['ch.flag' => '1', 'cbbr.cbbr_flag' => '1'])->get()->result());
    }
    public static function get($user){
        $mcb_id = $user->main_company->cb_id;
        return self::$db->from('cb_br cbbr')->join('company_history ch', 'cbbr.br_id = ch.ch_cb_id')->where('cbbr.cb_id', $mcb_id)->where('cbbr.br_id !=', $mcb_id)->where(['ch.flag' => '1', 'cbbr.cbbr_flag' => '1'])->get()->result();
    }

    public static function add($data, $user){
        $last_record = self::$db->query("SELECT * FROM cb_br cbbr JOIN company_branches cb ON cb.cb_id=cbbr.cb_id WHERE cbbr.cb_id='".$user->cb_id."' ORDER BY CAST(cbbr.br_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->br_seq) + 1).'' : '1';
        $code = '11'.$seq.'2';
        $data['cb_code'] = $code;
        self::$db->insert('company_branches', $data);
        $br_id = self::$db->insert_id();
        $ch_data = [
                    'ch_cb_id' => $br_id, 
                    'ch_cb_code' => $code,
                    'ch_cb_name' => $data['cb_name'], 
                    'ch_name' => $data['cb_name'], 
                    'ch_cb_address' => $data['cb_address'], 
                    'ch_cb_tin' => $data['cb_tin'], 
                    'ch_cb_class' => $data['cb_class'], 
                    'ch_cb_bp_type' => $data['cb_bp_type'], 
                    'ch_cb_tax_type' => $data['cb_tax_type'], 
                    'ch_cb_seq' => $data['cb_seq'], 
                    'ch_cb_cno' => $data['cb_cno'], 
                    'ch_cb_email' => $data['cb_email']
                ];
        self::$db->insert('company_history', $ch_data);
        self::$db->insert('cb_br', ['cb_id' => $user->cb_id, 'br_id' => $br_id, 'br_seq' => $seq]);
        return self::$db->insert_id();
    }
    public static function edit($data, $ch_id, $ch_cb_id, $user){
        self::$db->query("UPDATE company_history ch SET ch.ch_cb_code='' WHERE ch.ch_cb_id IN (SELECT ch_cb_id FROM(SELECT ch.ch_cb_id FROM company_history ch JOIN cb_br cbbr ON cbbr.br_id=ch.ch_cb_id WHERE cbbr.cb_id='".$user->cb_id."' AND ch.ch_cb_code='".$data['ch_cb_code']."' AND cbbr.br_id != '".$ch_cb_id."') t) AND ch.flag='1'");
        self::$db->where('ch_id', $ch_id)->update('company_history', $data);
    }
    public static function update($data, $ch_id, $ch_cb_id, $cbbr_id, $user){
        self::$db->query("UPDATE company_history ch SET ch.ch_cb_code='' WHERE ch.ch_cb_id IN (SELECT ch_cb_id FROM(SELECT ch.ch_cb_id FROM company_history ch JOIN cb_br cbbr ON cbbr.br_id=ch.ch_cb_id WHERE cbbr.cb_id='".$user->cb_id."' AND ch.ch_cb_code='".$data['ch_cb_code']."' AND cbbr.br_id != '".$ch_cb_id."') t) AND ch.flag='1'");
        $last_record = self::$db->query("SELECT * FROM cb_br cbbr JOIN company_branches cb ON cb.cb_id=cbbr.cb_id WHERE cbbr.cb_id='".$user->cb_id."' ORDER BY CAST(cbbr.br_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->br_seq) + 1).'' : '1';
        self::$db->insert('cb_br', ['cb_id' => $user->cb_id, 'br_id' => $ch_cb_id, 'br_seq' => $seq]);
        self::$db->where('cbbr_id', $cbbr_id)->update('cb_br', ['cbbr_flag' => '0']);
        self::$db->where('ch_id', $ch_id)->update('company_history', ['flag' => '0']);
        self::$db->insert('company_history', $data);
    }
    public static function filter_table($user, $filter1){
        $mcb_id = $user->main_company->cb_id;
        if($filter1){
            return self::$db->from('cb_br cbbr')->join('company_history ch', 'cbbr.br_id = ch.ch_cb_id')->where('cbbr.cb_id', $mcb_id)->where('cbbr.br_id !=', $mcb_id)->where(['ch.flag' => '1', 'cbbr.cbbr_flag' => '1', 'ch.ch_cb_tax_type' => $filter1])->get()->result();
        }else{
            return self::$db->from('cb_br cbbr')->join('company_history ch', 'cbbr.br_id = ch.ch_cb_id')->where('cbbr.cb_id', $mcb_id)->where('cbbr.br_id !=', $mcb_id)->where(['ch.flag' => '1', 'cbbr.cbbr_flag' => '1'])->get()->result();
        }
    }
}