<?php
class Profiles_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function add($data, $cb_id){
        self::$db->insert('profiles', $data);
        return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    }
    public static function edit($id, $data){
        self::$db->where('p_id', $id)->update('profiles', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
}