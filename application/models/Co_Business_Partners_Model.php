<?php
class Co_Business_Partners_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function business_partner_count($user){
        return count(self::$db->select('cbp.*, bpc.*, bpt.*')
                                ->from('co_business_partners cbp')
                                ->join('business_partners_class bpc', 'bpc.bpc_id=cbp.bpc_id')
                                ->join('business_partners_type bpt', 'bpt.bpt_id=cbp.bpt_id')
                                ->where(['cbp.flag' => '1', 'cbp.cb_id' => $user->main_company->cb_id])->get()->result());
    }
    public static function get($user){
        $data = self::$db->select(
                                    'cbp.*, bpc.*, bpt.*')
                                ->from('co_business_partners cbp')
                                ->join('business_partners_class bpc', 'bpc.bpc_id=cbp.bpc_id')
                                ->join('business_partners_type bpt', 'bpt.bpt_id=cbp.bpt_id')
                                ->where(['cbp.flag' => '1', 'cbp.cb_id' => $user->main_company->cb_id])->get()->result();
        foreach ($data as $key => &$value) {
            $value->vat = self::$db->from('taxes t')->join('co_business_partners_vat cobpvat', 'cobpvat.t_id=t.t_id')->where(['cobpvat.co_bp_id' => $value->co_bp_id, 'cobpvat.flag' => '1'])->get()->result();
        }
        foreach ($data as $key => &$value) {
            $value->ewt = self::$db->from('taxes t')->join('co_business_partners_ewt cobpewt', 'cobpewt.t_id=t.t_id')->where(['cobpewt.co_bp_id' => $value->co_bp_id, 'cobpewt.flag' => '1'])->get()->result();
        }
        foreach ($data as $key => &$value) {
            $value->fwt = self::$db->from('taxes t')->join('co_business_partners_fwt cobpfwt', 'cobpfwt.t_id=t.t_id')->where(['cobpfwt.co_bp_id' => $value->co_bp_id, 'cobpfwt.flag' => '1'])->get()->result();
        }
        return $data;
    }
    public static function add($data, $new_class, $bpc_code, $vat, $ewt, $fwt, $user){
        $last_record = self::$db->query("SELECT * FROM co_business_partners cobpc WHERE cobpc.cb_id='".$user->cb_id."' ORDER BY CAST(cobpc.co_bp_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->co_bp_seq) + 1).'' : '1';
        $data['co_bp_seq'] = $seq;
        $data['co_bp_code'] = $bpc_code.''.$seq.''.$data['bpt_id'];
        if($new_class !== ''){
            self::$db->insert('business_partners_class', ['bpc_code' => '', 'bpc_class' => $new_class, 'bpc_company' => 'company']);
            $bpc_id = self::$db->insert_id();
            self::$db->insert('co_bp_class', ['bpc_id' => $bpc_id, 'cb_id' => $user->cb_id]);
            $data['bpc_id'] = $bpc_id;
        }
        self::$db->insert('co_business_partners', $data);
        $co_bp_id = self::$db->insert_id();
        foreach ($vat as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_vat', ['co_bp_id' => $co_bp_id, 't_id' => $value]);
            }
        }
        foreach ($ewt as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_ewt', ['co_bp_id' => $co_bp_id, 't_id' => $value]);
            }
        }
        foreach ($fwt as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_fwt', ['co_bp_id' => $co_bp_id, 't_id' => $value]);
            }
        }
        return $co_bp_id;
    }
    public static function edit($data, $id, $new_class, $bpc_code, $vat, $ewt, $fwt, $user){
        self::$db->query("UPDATE co_business_partners cbp SET cbp.co_bp_code='' WHERE cbp.co_bp_id IN (SELECT co_bp_id FROM(SELECT cbp.co_bp_id FROM co_business_partners cbp WHERE cbp.cb_id='".$user->cb_id."' AND cbp.co_bp_code='".$data['co_bp_code']."' AND cbp.co_bp_id != '".$id."') t) AND cbp.flag='1'");
        if($new_class !== ''){
            self::$db->insert('business_partners_class', ['bpc_code' => '', 'bpc_class' => $new_class, 'bpc_company' => 'company']);
            $bpc_id = self::$db->insert_id();
            self::$db->insert('co_bp_class', ['bpc_id' => $bpc_id, 'cb_id' => $user->cb_id]);
            $data['bpc_id'] = $bpc_id;
        }
        self::$db->where('co_bp_id', $id)->update('co_business_partners', $data);

        self::$db->where(['co_bp_id' => $id])->update('co_business_partners_vat', ['flag' => '0']);
        foreach ($vat as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_vat', ['co_bp_id' => $id, 't_id' => $value]);
            }
        }
        self::$db->where(['co_bp_id' => $id])->update('co_business_partners_ewt', ['flag' => '0']);
        foreach ($ewt as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_ewt', ['co_bp_id' => $id, 't_id' => $value]);
            }
        }
        self::$db->where(['co_bp_id' => $id])->update('co_business_partners_fwt', ['flag' => '0']);
        foreach ($fwt as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_fwt', ['co_bp_id' => $id, 't_id' => $value]);
            }
        }
    }
    public static function update($data, $id, $new_class, $bpc_code, $vat, $ewt, $fwt, $user){
        $last_record = self::$db->query("SELECT * FROM co_business_partners cobpc WHERE cobpc.cb_id='".$user->cb_id."' ORDER BY CAST(cobpc.co_bp_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->co_bp_seq) + 1).'' : '1';
        $data['co_bp_seq'] = $seq;
        self::$db->query("UPDATE co_business_partners cbp SET cbp.co_bp_code='' WHERE cbp.co_bp_id IN (SELECT co_bp_id FROM(SELECT cbp.co_bp_id FROM co_business_partners cbp WHERE cbp.cb_id='".$user->cb_id."' AND cbp.co_bp_code='".$data['co_bp_code']."' AND cbp.co_bp_id != '".$id."') t) AND cbp.flag='1'");
        if($new_class !== ''){
            self::$db->insert('business_partners_class', ['bpc_code' => '', 'bpc_class' => $new_class, 'bpc_company' => 'company']);
            $bpc_id = self::$db->insert_id();
            self::$db->insert('co_bp_class', ['bpc_id' => $bpc_id, 'cb_id' => $user->cb_id]);
            $data['bpc_id'] = $bpc_id;
        }
        self::$db->where('co_bp_id', $id)->update('co_business_partners', ['flag' => '0']);
        self::$db->insert('co_business_partners', $data);
        
        $co_bp_id = self::$db->insert_id();
        foreach ($vat as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_vat', ['co_bp_id' => $co_bp_id, 't_id' => $value]);
            }
        }
        foreach ($ewt as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_ewt', ['co_bp_id' => $co_bp_id, 't_id' => $value]);
            }
        }
        foreach ($fwt as $key => $value) {
            if($value !== ''){
                self::$db->insert('co_business_partners_fwt', ['co_bp_id' => $co_bp_id, 't_id' => $value]);
            }
        }

    }
    public static function get_bp_class($user){
        return self::$db->from('business_partners_class bpc')->join('co_bp_class cobpc', 'cobpc.bpc_id=bpc.bpc_id')->where(['cobpc.cb_id' => $user->main_company->cb_id, 'bpc.flag' => '1'])->get()->result();
    }
    public static function get_bp_type($user){
        return self::$db->get('business_partners_type')->result();
    }
    public static function get_tax_1($user){
        return self::$db->from('taxes t')->join('co_taxes cot', 'cot.t_id=t.t_id')->join('tax_types tt', 'tt.tt_id=t.tt_id')->where(['cot.cb_id' => $user->main_company->cb_id, 'tt.tt_code' => '2', 't.flag' => '1'])->get()->result();
    }
    public static function get_tax_2($user){
        return self::$db->from('taxes t')->join('co_taxes cot', 'cot.t_id=t.t_id')->join('tax_types tt', 'tt.tt_id=t.tt_id')->where(['cot.cb_id' => $user->main_company->cb_id, 'tt.tt_code' => '5', 't.flag' => '1'])->get()->result();
    }
    public static function get_tax_3($user){
        return self::$db->from('taxes t')->join('co_taxes cot', 'cot.t_id=t.t_id')->join('tax_types tt', 'tt.tt_id=t.tt_id')->where(['cot.cb_id' => $user->main_company->cb_id, 'tt.tt_code' => '6', 't.flag' => '1'])->get()->result();
    }

    public static function add_bp_vat($data){
        self::$db->insert('co_business_partners_vat', $data);
    }
    public static function add_bp_ewt($data){
        self::$db->insert('co_business_partners_ewt', $data);
    }
    public static function add_bp_fwt($data){
        self::$db->insert('co_business_partners_fwt', $data);
    }
}