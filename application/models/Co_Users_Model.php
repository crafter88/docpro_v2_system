<?php
class Co_Users_Model extends CI_Model{
	private static $db;

	function __construct(){
		parent::__construct();
		self::$db = &get_instance()->db;
	}

	public static function user_count($user){
		if($user->main_company->cb_id === $user->cb_id){
			return self::$db->query("SELECT * FROM profiles p JOIN users u ON u.p_id=p.p_id JOIN cb_br cbbr ON cbbr.cbbr_id=u.cbbr_id JOIN company_branches cb ON cb.cb_id=cbbr.br_id JOIN company_history ch ON ch.ch_cb_id=cb.cb_id WHERE ch.flag='1' AND p.flag='1' AND u.u_seq != '1' AND p.cb_id IN (SELECT br_id FROM(SELECT cbbr.br_id FROM cb_br cbbr JOIN company_history ch ON ch.ch_cb_id=cbbr.br_id WHERE ch.flag='1' AND cbbr.cb_id='".$user->main_company->cb_id."') t)")->result();
		}
		return self::$db->from('profiles p')->join('users u', 'u.p_id=p.p_id')->join('cb_br cbbr', 'cbbr.cbbr_id=u.cbbr_id')->join('company_branches cb', 'cb.cb_id=cbbr.br_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where(['ch.flag' => '1', 'p.cb_id' => $user->cb_id, 'p.flag' => '1'])->where('u.u_seq !=', '0')->get()->result();
	}

	public static function company_superadmin_users_get($user){
		if($user->main_company->cb_id === $user->cb_id){
			return self::$db->query("SELECT * FROM profiles p JOIN users u ON u.p_id=p.p_id JOIN cb_br cbbr ON cbbr.cbbr_id=u.cbbr_id JOIN company_branches cb ON cb.cb_id=cbbr.br_id JOIN company_history ch ON ch.ch_cb_id=cb.cb_id WHERE ch.flag='1' AND p.flag='1' AND u.u_seq != '0' AND p.cb_id IN (SELECT br_id FROM(SELECT cbbr.br_id FROM cb_br cbbr JOIN company_history ch ON ch.ch_cb_id=cbbr.br_id WHERE ch.flag='1' AND cbbr.cb_id='".$user->main_company->cb_id."') t)")->result();
		}
		return self::$db->from('profiles p')->join('users u', 'u.p_id=p.p_id')->join('cb_br cbbr', 'cbbr.cbbr_id=u.cbbr_id')->join('company_branches cb', 'cb.cb_id=cbbr.br_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where(['ch.flag' => '1', 'p.cb_id' => $user->cb_id, 'p.flag' => '1'])->where('u.u_seq !=', '0')->get()->result();
	}
	public static function add($profile, $user){
		self::$db->insert('profiles', $profile);
		$p_id = self::$db->insert_id();
		$last_record = self::$db->query("SELECT * FROM  users u WHERE u.cbbr_id='".$user['cbbr_id']."' ORDER BY CAST(u.u_seq AS DECIMAL) DESC LIMIT 1")->result();
		$seq = count($last_record) > 0 ? (floatval($last_record[0]->u_seq) + 1).'' : '1';
		$user['u_seq'] = $seq;
		$user['p_id'] = $p_id;
		self::$db->insert('users', $user);
	}
	public static function edit($profile, $user, $p_id, $u_id){
		self::$db->where('p_id', $p_id)->update('profiles', $profile);
		self::$db->where('u_id', $u_id)->update('users', $user);
	}
	public static function get_branches($user){
		return self::$db->from('cb_br cbbr')->join('company_branches cb', 'cb.cb_id=cbbr.br_id')->join('company_history ch', 'ch.ch_cb_id=cb.cb_id')->where(['cbbr.cb_id' => $user->cb_id, 'ch.flag' => '1', 'cb.flag' => '1'])->get()->result();
	}
	public static function filter_table($user, $filter1){
        if($filter1){
            return self::$db->query("SELECT * FROM profiles p JOIN users u ON u.p_id=p.p_id JOIN cb_br cbbr ON cbbr.cbbr_id=u.cbbr_id JOIN company_branches cb ON cb.cb_id=cbbr.br_id JOIN company_history ch ON ch.ch_cb_id=cb.cb_id WHERE ch.flag='1' AND p.flag='1' AND u.u_seq != '0' AND u.u_type='".$filter1."' AND p.cb_id IN (SELECT br_id FROM(SELECT cbbr.br_id FROM cb_br cbbr JOIN company_history ch ON ch.ch_cb_id=cbbr.br_id WHERE ch.flag='1' AND cbbr.cb_id='".$user->main_company->cb_id."' ) t)")->result();
        }
        return self::$db->query("SELECT * FROM profiles p JOIN users u ON u.p_id=p.p_id JOIN cb_br cbbr ON cbbr.cbbr_id=u.cbbr_id JOIN company_branches cb ON cb.cb_id=cbbr.br_id JOIN company_history ch ON ch.ch_cb_id=cb.cb_id WHERE ch.flag='1' AND p.flag='1' AND u.u_seq != '0' AND p.cb_id IN (SELECT br_id FROM(SELECT cbbr.br_id FROM cb_br cbbr JOIN company_history ch ON ch.ch_cb_id=cbbr.br_id WHERE ch.flag='1' AND cbbr.cb_id='".$user->main_company->cb_id."') t)")->result();
    }
}