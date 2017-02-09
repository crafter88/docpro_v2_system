<?php
class Taxes_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get($tt_id){
        return self::$db->from('taxes t')->join('tax_types tt', 't.tt_id=tt.tt_id')->where(['t.flag' => '1', 't.t_company' => 'docpro', 'tt.tt_id' => $tt_id])->get()->result();
    }
    public static function get_tax_types(){
        return self::$db->get_where('tax_types', ['tt_company' => 'docpro'])->result();
    }
    public static function add($data){
        $last_record = self::$db->query("SELECT * FROM taxes WHERE t_company='docpro' AND tt_id='".$data['tt_id']."' ORDER BY CAST(t_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->t_seq) + 1).'' : '1';
        self::$db->insert('taxes', ['t_seq' => $seq, 't_code' => $data['tt_code'].''.$seq, 't_atc' => $data['t_atc'], 't_name' => $data['t_name'], 't_shortname' => $data['t_shortname'], 't_rate' => $data['t_rate'], 't_base' => $data['t_base'], 'tt_id' => $data['tt_id'], 't_company' => $data['t_company'], 't_setup_company' => $data['t_setup_company']]);
    }
    public static function edit($id, $data){
        self::$db->query("UPDATE taxes t SET t.t_code='' WHERE t.t_id IN (SELECT t_id FROM(SELECT t.t_id FROM taxes t WHERE t.tt_id='".$data['tt_id']."' AND t.t_code='".$data['t_code']."' AND t.t_company='docpro') t) AND t.flag='1'");
        self::$db->where('t_id', $id)->update('taxes', ['t_code' => $data['t_code'], 't_atc' => $data['t_atc'], 't_name' => $data['t_name'], 't_shortname' => $data['t_shortname'], 't_rate' => $data['t_rate'], 't_base' => $data['t_base']]);
    }
    public static function update($data, $t_id){
        $seq = self::$db->get_where('taxes', ['t_id' => $t_id])->result()[0]->t_seq;
        $code = self::$db->get_where('taxes', ['t_id' => $t_id])->result()[0]->t_code;
        self::$db->where('t_id', $t_id)->update('taxes', ['flag' => '0']);
        self::$db->insert('taxes', ['t_seq' => $seq, 't_code' => $code, 't_name' => $data['t_name'], 't_shortname' => $data['t_shortname'], 't_rate' => $data['t_rate'], 't_base' => $data['t_base'], 'tt_id' => $data['tt_id'], 't_company' => $data['t_company'], 't_setup_company' => 'docpro']);
    }
    public static function delete($t_id){
        self::$db->where('t_id', $t_id)->update('taxes', ['flag' => '0']);
    }
}