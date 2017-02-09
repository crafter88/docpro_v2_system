<?php
class P_CB_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('p_cb')->get()->result();
    }
    public static function add($data){
        self::$db->insert('p_cb', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
}