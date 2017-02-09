<?php
class Discounts_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->get_where('discounts', ['flag' => '1'])->result();
    }
    public static function add($data){
        self::$db->insert('discounts', $data);
        return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    }
    public static function edit($id, $data){
        self::$db->where('di_id', $id)->update('discounts', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function update($data, $di_id){
        self::$db->where('di_id', $di_id)->update('discounts', ['flag' => '0']);
        self::$db->insert('discounts', $data);
        return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    }
}