<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe_model extends CI_Model {
    private static $db;

    public function __construct(){
        parent::__construct();
        self::$db =& get_instance()->db;
    }

    public static function save($company, $profile, $user, $registrant){
    	$password = password_hash($user['u_pass'], PASSWORD_BCRYPT, ['cost' => 11]);

// Company
        $last_record = self::$db->query("SELECT * FROM company_branches ORDER BY CAST(cb_seq AS DECIMAL) DESC LIMIT 1")->result()[0];
        $last_seq = count($last_record) > 0 ? (floatval($last_record->cb_seq) + 1).'' : '0';
        $zeros = '';
        for($i = 0; $i < (6 - floatval(strlen($last_seq))); $i++){
          $zeros .= '0';
        }
        $seq = $zeros.''.$last_seq;
        $company['cb_seq'] = $seq;
        $company['cb_code'] = $company['cb_bp_type'] === 'Individual' ? '11'.$last_seq.'1' : '11'.$last_seq.'2';
        self::$db->insert('company_branches', $company);
        $cb_id = self::$db->insert_id();

// Company History
        $company_history = [
                                'ch_cb_id'          => $cb_id,
                                'ch_cb_code'        => $company['cb_code'],
                                'ch_cb_name'        => $company['cb_name'],
                                'ch_cb_ind_name'    => $company['cb_ind_name'],
                                'ch_name'           => $company['name'],
                                'ch_cb_trade_name'  => $company['cb_trade_name'],
                                'ch_cb_address'     => $company['cb_address'],
                                'ch_cb_class'       => $company['cb_class'],
                                'ch_cb_bp_type'     => $company['cb_bp_type'],
                                'ch_cb_cno'         => $company['cb_cno'],
                                'ch_cb_email'       => $company['cb_email'],
                                'ch_cb_seq'         => $company['cb_seq']
                            ];
        self::$db->insert('company_history', $company_history);

//CBBR
        self::$db->insert('cb_br', ['cb_id' => $cb_id, 'br_id' => $cb_id, 'br_seq' => '0']);
        $cbbr_id = self::$db->insert_id();

// Profile
        $profile['cb_id'] = $cb_id;
       	self::$db->insert('profiles', $profile);
       	$p_id = self::$db->insert_id();

// User
        $user['p_id'] = $p_id;
        $user['u_pass'] = $password;
        $user['cbbr_id'] = $cbbr_id;
        $user['u_seq'] = '0';
       	self::$db->insert('users', $user);

// Registrant
        $registrant['cb_id'] = $cb_id;
        self::$db->insert('co_registrant', $registrant);

// COA
        $coa_lvl_1 = self::$db->from('coa_lvl_1')->where(['lvl_1_company' => 'docpro', 'flag' => '1'])->order_by('lvl_1_id', 'asc')->get()->result();

        foreach ($coa_lvl_1 as $key1 => $lvl1) {
            $lvl_1_data = [
                'lvl_1_seq' => floatval($key1) + 1,
                'lvl_1_code' => $lvl1->lvl_1_code,
                'lvl_1_name' => $lvl1->lvl_1_name,
                'lvl_1_company' => 'company',
                'lvl_1_setup_company' => 'docpro',
                'r_id' => $lvl1->lvl_1_id,
            ];
            self::$db->insert('coa_lvl_1', $lvl_1_data);
            $lvl_1_id = self::$db->insert_id();
            self::$db->insert('co_coa_lvl1', ['cb_id' => $cb_id, 'lvl_1_id' => $lvl_1_id]);

            $coalvl_1_2 = self::$db->from('coa_lvl_2 coa2')->join('coalvl_1_2 coa12', 'coa2.lvl_2_id=coa12.lvl_2_id')->where('coa12.lvl_1_id', $lvl1->lvl_1_id)->order_by('coa2.lvl_2_id', 'asc')->get()->result();

            foreach ($coalvl_1_2 as $key2 => $lvl2) {
                $coa_2_data = [
                    'lvl_2_seq' => floatval($key2) + 1,
                    'lvl_2_code' => $lvl2->lvl_2_code,
                    'lvl_2_name' => $lvl2->lvl_2_name,
                    'lvl_2_company' => 'company',
                    'lvl_2_setup_company' => 'docpro',
                    'r_id' => $lvl2->lvl_2_id
                ];
                self::$db->insert('coa_lvl_2', $coa_2_data);
                $lvl_2_id = self::$db->insert_id();
                self::$db->insert('coalvl_1_2', ['lvl_1_id' => $lvl_1_id, 'lvl_2_id' => $lvl_2_id]);

                $coalvl_2_3 = self::$db->from('coa_lvl_3 coa3')->join('coalvl_2_3 coa23', 'coa3.lvl_3_id=coa23.lvl_3_id')->where('coa23.lvl_2_id', $lvl2->lvl_2_id)->order_by('coa3.lvl_3_id', 'asc')->get()->result();

                foreach ($coalvl_2_3 as $key3 => $lvl3) {
                    $coa_3_data = [
                        'lvl_3_seq' => floatval($key3) + 1,
                        'lvl_3_code' => $lvl3->lvl_3_code,
                        'lvl_3_code_int' => $lvl3->lvl_3_code_int,
                        'lvl_3_name' => $lvl3->lvl_3_name,
                        'lvl_3_company' => 'company',
                        'lvl_3_setup_company' => 'docpro',
                        'r_id' => $lvl3->lvl_3_id,
                    ];
                    self::$db->insert('coa_lvl_3', $coa_3_data);
                    $lvl_3_id = self::$db->insert_id();
                    self::$db->insert('coalvl_2_3', ['lvl_2_id' => $lvl_2_id, 'lvl_3_id' => $lvl_3_id]);

                    $coalvl_3_4 = self::$db->from('coa_lvl_4 coa4')->join('coalvl_3_4 coa34', 'coa4.lvl_4_id=coa34.lvl_4_id')->where('coa34.lvl_3_id', $lvl3->lvl_3_id)->order_by('coa4.lvl_4_id', 'asc')->get()->result();

                    foreach ($coalvl_3_4 as $key4 => $lvl4) {
                        $coa_4_data = [
                            'lvl_4_seq' => floatval($key4) + 1,
                            'lvl_4_code' => $lvl4->lvl_4_code,
                            'lvl_4_name' => $lvl4->lvl_4_name,
                            'bir' => $lvl4->bir,
                            'lvl_4_company' => 'company',
                            'lvl_4_setup_company' => 'docpro',
                            'r_id' => $lvl4->lvl_4_id,
                        ];
                        self::$db->insert('coa_lvl_4', $coa_4_data);
                        $lvl_4_id = self::$db->insert_id();
                        self::$db->insert('coalvl_3_4', ['lvl_3_id' => $lvl_3_id, 'lvl_4_id' => $lvl_4_id]);

                        $coalvl_4_5 = self::$db->from('coa_lvl_5 coa5')->join('coalvl_4_5 coa45', 'coa5.lvl_5_id=coa45.lvl_5_id')->where('coa45.lvl_4_id', $lvl4->lvl_4_id)->order_by('coa5.lvl_5_id', 'asc')->get()->result();

                        foreach ($coalvl_4_5 as $key5 => $lvl5) {
                            $coa_5_data = [
                                'lvl_5_seq' => floatval($key5) + 1,
                                'lvl_5_code' => $lvl5->lvl_5_code,
                                'lvl_5_name' => $lvl5->lvl_5_name,
                                'lvl_5_company' => 'company',
                                'lvl_5_setup_company' => 'docpro',
                                'r_id' => $lvl5->lvl_5_id,
                            ];
                            self::$db->insert('coa_lvl_5', $coa_5_data);
                            $lvl_5_id = self::$db->insert_id();
                            self::$db->insert('coalvl_4_5', ['lvl_4_id' => $lvl_4_id, 'lvl_5_id' => $lvl_5_id]);

                            $coalvl_5_6 = self::$db->from('coa_lvl_6 coa6')->join('coalvl_5_6 coa56', 'coa6.lvl_6_id=coa56.lvl_6_id')->where('coa56.lvl_5_id', $lvl5->lvl_5_id)->order_by('coa6.lvl_6_id', 'asc')->get()->result();

                            foreach ($coalvl_5_6 as $key6 => $lvl6) {
                                $coa_6_data = [
                                    'lvl_6_seq' => floatval($key6) + 1,
                                    'lvl_6_code' => $lvl6->lvl_6_code,
                                    'lvl_6_name' => $lvl6->lvl_6_name,
                                    'lvl_6_company' => 'company',
                                    'lvl_6_setup_company' => 'docpro',
                                    'r_id' => $lvl6->lvl_6_id,
                                ];
                                self::$db->insert('coa_lvl_6', $coa_6_data);
                                $lvl_6_id = self::$db->insert_id();
                                self::$db->insert('coalvl_5_6', ['lvl_5_id' => $lvl_5_id, 'lvl_6_id' => $lvl_6_id]);
                            }
                        }
                    }
                }

            }
        }

// TAX TYPES
        $tax_types = self::$db->get_where('tax_types', ['tt_company' => 'docpro', 'flag' => '1'])->result();
        foreach ($tax_types as $key => &$value) {
            $tt = [
                    'tt_seq' => $value->tt_seq,
                    'tt_code' => $value->tt_code,
                    'tt_name' => $value->tt_name,
                    'tt_shortname' => $value->tt_shortname,
                    'tt_company' => 'company',
                    'tt_setup_company' => $value->tt_setup_company,
                    'flag' => '1',
                    'r_id' => $value->tt_id
                ];

            self::$db->insert('tax_types', $tt);
            $tt_id = self::$db->insert_id();
            self::$db->insert('co_tax_types', ['tt_id' => $tt_id, 'cb_id' => $cb_id]);

            $value->equivalent = $tt_id;
        }

// TAXES
        $taxes = self::$db->get_where('taxes', ['t_company' => 'docpro', 'flag' => '1'])->result();
        foreach ($taxes as $key1 => $tax) {
            $tax_copy = $tax;
            foreach ($tax_types as $key2 => $value) {
                $tt_copy = $value;

                if($tt_copy->tt_id === $tax_copy->tt_id){
                    $tax = [
                        't_seq' => $tax->t_seq,
                        't_code' => $tax->t_code,
                        't_atc' => $tax->t_atc,
                        't_name' => $tax->t_name,
                        't_shortname' => $tax->t_shortname,
                        't_rate' => $tax->t_rate,
                        't_base' => $tax->t_base,
                        'tt_id' => $value->equivalent,
                        't_company' => 'company',
                        't_setup_company' => 'docpro',
                        'r_id' => $tax->t_id
                    ];

                    self::$db->insert('taxes', $tax);
                    $t_id = self::$db->insert_id();
                    self::$db->insert('co_taxes', ['t_id' => $t_id, 'cb_id' => $cb_id]);
                }
                
            }
        }
// MOP
        $mop = self::$db->get_where('modes_of_payment', ['mop_company' => 'docpro', 'flag' => '1'])->result();
        foreach ($mop as $key => $value) {
            $data = [
                        'mop_seq' => $value->mop_seq,
                        'mop_code' => $value->mop_code,
                        'mop_name' => $value->mop_name,
                        'mop_shortname' => $value->mop_shortname,
                        'top_id' => $value->top_id,
                        'mop_company' => $value->mop_company
                    ];
            self::$db->insert('modes_of_payment', $data);
            $mop_id = self::$db->insert_id();
            self::$db->insert('co_modes_of_payment', ['mop_id' => $mop_id, 'cb_id' => $cb_id]);
        }
// JOURNALS
        $journals = [
                        [
                            'j_code' => '1',
                            'j_name' => 'Sales Journal',
                            'j_shortname' => 'SJ',
                            'j_company' => 'company'
                        ],
                        [
                            'j_code' => '2',
                            'j_name' => 'Receipts Journal',
                            'j_shortname' => 'RJ',
                            'j_company' => 'company'
                        ],
                        [
                            'j_code' => '3',
                            'j_name' => 'Purchase Journal',
                            'j_shortname' => 'PJ',
                            'j_company' => 'company'
                        ],
                        [
                            'j_code' => '4',
                            'j_name' => 'Collections Journal',
                            'j_shortname' => 'CJ',
                            'j_company' => 'company'
                        ],
                        [
                            'j_code' => '5',
                            'j_name' => 'Disbursments Journal',
                            'j_shortname' => 'DJ',
                            'j_company' => 'company'
                        ],
                        [
                            'j_code' => '6',
                            'j_name' => 'General Journal',
                            'j_shortname' => 'GJ',
                            'j_company' => 'company'
                        ],
                        [
                            'j_code' => '7',
                            'j_name' => 'Special Journal',
                            'j_shortname' => 'SJ',
                            'j_company' => 'company'
                        ]
                    ];
        foreach ($journals as $key => $value) {
            self::$db->insert('journals', $value);
            $id = self::$db->insert_id();
            self::$db->insert('co_journals', ['j_id' => $id, 'cb_id' => $cb_id]);
        }

        $bpc = self::$db->get_where('business_partners_class', ['bpc_company' => 'docpro', 'flag' => '1'])->result();
        foreach($bpc as $key => $value){
            $co_bpc = [
                        'bpc_code' => $value->bpc_code,
                        'bpc_class' => $value->bpc_class,
                        'bpc_company' => 'company'
                    ];

            self::$db->insert('business_partners_class', $co_bpc);
            $bpc_id = self::$db->insert_id();
            self::$db->insert('co_bp_class', ['bpc_id' => $bpc_id, 'cb_id' => $cb_id]);
        }
    }
}

