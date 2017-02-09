<?php
class User_accounts_model extends CI_Model {
	private static $db;
	
	function __construct(){
		parent::__construct();
		self::$db = &get_instance()->db;
	}
    public static function Login($username, $password){
		$user = self::$db->get_where('user_accounts', array('ua_username' => $username));
		if($user->num_rows() > 0){
	            $user = $user->result()[0];
	            if(password_verify($password, $user->ua_password)){
			return $user->ua_id;
	            }
		}
		return false;
	}
    public static function Insert($username, $password){
		if(self::$db->get_where('user_accounts', array('ua_username' => $username))->num_rows() > 0){
	            return false;
		}
		self::$db->insert('user_accounts', array('ua_username' => $username, 'ua_password' => password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]),'ua_password_text' => $password));
		return true;
    }
}