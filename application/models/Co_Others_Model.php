<?php
class Co_Others_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function other_count($user){
        return count(self::$db->from('co_others')->where('cb_id', $user->main_company->cb_id)->where('flag', '1')->get()->result());
    }
    public static function get($user){
        return self::$db->from('co_others')->where('cb_id', $user->main_company->cb_id)->where('flag', '1')->get()->result();
    }
    public static function add($data){
        self::$db->insert('co_others', $data);
    }
    public static function edit($data, $id){
        self::$db->where('co_o_id', $id)->update('co_others', $data);
    }
    public static function update($data, $id){
        self::$db->where('co_o_id', $id)->update('co_others', ['flag' => '0']);
        self::$db->insert('co_others', $data);
    }
}