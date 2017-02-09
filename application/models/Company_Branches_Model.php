<?php
class Company_Branches_Model extends CI_Model{
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function company_count(){
        return count(self::$db->get_where('company_history', ['flag' => '1'])->result());
    }
    public static function get($cb_id){
        return self::$db->query("SELECT cb.*, cbbr.*, ch.* FROM cb_br cbbr JOIN company_branches cb ON cb.cb_id=cbbr.cb_id JOIN company_history ch ON cb.cb_id=ch.ch_cb_id WHERE ch.flag='1' AND cbbr.cb_id=cbbr.br_id AND cb.cb_id != '".$cb_id."'")->result();
    }
    // public static function add($data){
    //     self::$db->insert('company_branches', $data);
    //     return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    // }
    public static function edit($data, $id){
        self::$db->where('cb_id', $id)->update('company_branches', $data);
        self::$db->where(['ch_cb_id' => $id, 'flag' => '1'])->update('company_history', ['ch_cb_address' => $data['cb_address'], 'ch_cb_cno' => $data['cb_cno'], 'ch_cb_email' => $data['cb_email']]);
    }
    public static function update($data, $id){
        $record = self::$db->get_where('company_branches', ['cb_id' => $id])->result()[0];
        self::$db->where(['ch_cb_id' => $id, 'flag' => '1'])->update('company_history', ['ch_end_date' => date('Y-m-d H:i:s'), 'flag' => '0']);
        $new_data = [
                        'ch_cb_id'   => $id,
                        'ch_cb_code' => $record->cb_code,
                        'ch_cb_name' => $record->cb_name,
                        'ch_cb_ind_name' => $record->cb_ind_name,
                        'ch_name' => $record->name,
                        'ch_cb_address' => $data['cb_address'],
                        'ch_cb_tin' => $record->cb_tin,
                        'ch_cb_class' => $record->cb_class,
                        'ch_cb_bp_type' => $record->cb_bp_type,
                        'ch_cb_tax_type' => $record->cb_tax_type,
                        'ch_cb_seq' => $record->cb_seq,
                        'ch_cb_cno' => $data['cb_cno'],
                        'ch_cb_email' => $data['cb_email'],
                    ];
        self::$db->insert('company_history', $new_data);
    }
    public static function get_branch($cb_id){
        return self::$db->from('cb_br cbbr')->join('company_branches cb', 'cbbr.br_id = cb.cb_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where(['cbbr.cb_id' => $cb_id, 'cbbr.cbbr_flag' => '1', 'ch.flag' => '1'])->where('cbbr.br_id !=', $cb_id)->order_by('cb.cb_seq')->get()->result();
    }
}