<?php
class Co_Discounts_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function discount_count($user){
        return count(self::$db->get_where('co_discounts', ['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->result());
    }
    public static function get($user){
        return self::$db->get_where('co_discounts', ['cb_id' => $user->main_company->cb_id, 'flag' => '1'])->result();
    }
    public static function add($data, $user){
        $last_record = self::$db->query("SELECT * FROM co_discounts cd WHERE cd.cb_id='".$user->cb_id."' ORDER BY CAST(cd.co_d_code AS DECIMAL) DESC LIMIT 1")->result();
        $code = count($last_record) > 0 ? (floatval($last_record[0]->co_d_code) + 1).'' : '1';
        $data['co_d_code'] = $code;
        self::$db->insert('co_discounts', $data);
        return self::$db->insert_id();
    }
    public static function edit($data, $id, $user){
        self::$db->query("UPDATE co_discounts cd SET cd.co_d_code='' WHERE cd.co_d_id IN (SELECT co_d_id FROM(SELECT cd.co_d_id FROM co_discounts cd WHERE cd.cb_id='".$user->cb_id."' AND cd.co_d_code='".$data['co_d_code']."') t) AND cd.flag='1'");
        self::$db->where(['co_d_id' => $id])->update('co_discounts', $data);
    }
    public static function update($data, $id, $user){
        self::$db->query("UPDATE co_discounts cd SET cd.co_d_code='' WHERE cd.co_d_id IN (SELECT co_d_id FROM(SELECT cd.co_d_id FROM co_discounts cd WHERE cd.cb_id='".$user->cb_id."' AND cd.co_d_code='".$data['co_d_code']."' AND cd.co_d_id != '".$user->cb_id."') t) AND cd.flag='1'");
        self::$db->where(['co_d_id' => $id])->update('co_discounts', ['flag' => '0']);
        self::$db->insert('co_discounts', $data);
    }
}