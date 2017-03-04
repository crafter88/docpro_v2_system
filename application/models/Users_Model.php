<?php
class Users_Model extends CI_Model {
    private static $db;
    function __construct(){
        parent::__construct();
        self::$db = get_instance()->db;
    }
    public static function users_count(){
        return count(self::$db->get_where('users', ['u_flag' => '1'])->result());
    }
    public static function get($u_id, $cb_id){
        return self::$db->from('users u')->join('profiles p', 'u.p_id=p.p_id')->join('cb_br cbbr', 'cbbr.cbbr_id=u.cbbr_id')->join('company_branches cb', 'cbbr.br_id=cb.cb_id')->where(['cbbr.br_id' => $cb_id])->where('u.u_id !=', $u_id)->get()->result();
    }
    public static function check_username($username){
        return count(self::$db->get_where('users', ['u_name' => $username, 'u_flag' => '1'])->result());
    }
    public static function add($data){
        $last_record = self::$db->query("SELECT * FROM users u WHERE u.cbbr_id='".$data['cbbr_id']."' ORDER BY CAST(u.u_seq AS DECIMAL) DESC LIMIT 1")->result();
        $seq = count($last_record) > 0 ? (floatval($last_record[0]->u_seq) + 1).'' : '0';
        $data['u_seq'] = $seq;
        self::$db->insert('users', $data);
        return self::$db->affected_rows() > 0 ? self::$db->insert_id() : false;
    }
    public static function edit($id, $data){
        self::$db->where('u_id', $id)->update('users', $data);
        return self::$db->affected_rows() > 0 ? true : false;
    }
    public static function get_all_users(){
        return self::$db->from('users u')->join('profiles p', 'u.p_id=p.p_id')->get()->result();
    }
    public static function Login($username, $password){
        $user = self::$db->from('users u')->where('u.u_name =', $username)->join('profiles p', 'p.p_id = u.p_id')->join('cb_br cbbr', 'cbbr.cbbr_id=u.cbbr_id')->join('company_branches cb', 'cb.cb_id = cbbr.br_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where(['ch.flag' => '1', 'cb.flag' => '1'])->get();

        if($user->num_rows() > 0){
            $user = $user->result()[0];
            if(password_verify($password, $user->u_pass)){

                $user->main_company = self::$db->from('cb_br cbbr')->join('company_branches cb', 'cbbr.cb_id=cb.cb_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where('cbbr.cbbr_id', $user->cbbr_id)->get()->result()[0];
                $user->branch_company = self::$db->from('cb_br cbbr')->join('company_branches cb', 'cbbr.br_id=cb.cb_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where('cbbr.cbbr_id', $user->cbbr_id)->get()->result()[0];
                return $user;
            }
        }
        
        return false;
    }
}