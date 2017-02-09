<?php
class Co_Types_Of_Payment_Model extends CI_Model{
    private static $db;
    function __construct() {
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function get(){
        return self::$db->from('co_types_of_payment')->get()->result();
    }
}