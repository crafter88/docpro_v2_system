<?php

class Setup extends MY_Controller{
	
	function __construct(){
		parent::__construct('fragments_setup/master_layout');
        if(!($this->session->userdata('logged_in'))) redirect('login');
	}
	
	public function index(){
        if($this->session->userdata('setup_type')){
            if($this->session->userdata('setup_type') === 'default'){
                redirect('setup/account?setup_type=default', 'refresh');
            }
            redirect('setup/account?setup_type=customize', 'refresh');
        }
        return $this->load->view($this->layout, ['user' => $this->session->userdata('user'), 'content' => 'fragments_setup/content/welcome', 'footer_js' => 'fragments_setup/footer_js/welcome']);
	}

    public function success_complete(){
        return $this->load->view($this->layout, ['content' => 'fragments_setup/content/setup_complete']);
    }

    public function setup_account(){
        $setup_type = $this->input->get('setup_type');
        $this->session->set_userdata('setup_type', $setup_type);
        if($setup_type === 'default'){
            Setup_Model::coa_lvl4_default($this->session->userdata('user'));
            return $this->load->view($this->layout, ['head_css' => 'fragments_setup/head_css/setup_account', 'content' => 'fragments_setup/content/setup_account_default', 'footer_js' => 'fragments_setup/footer_js/setup_account_default', 'user' => $this->session->userdata('user')]);
        }
        Setup_Model::coa_lvl4_customize($this->session->userdata('user'));
        return $this->load->view($this->layout, ['head_css' => 'fragments_setup/head_css/setup_account', 'content' => 'fragments_setup/content/setup_account', 'footer_js' => 'fragments_setup/footer_js/setup_account', 'user' => $this->session->userdata('user')]);
    }
    public function reset_coa_tax(){
        $this->session->unset_userdata('setup_type');
        $setup_type = $this->input->post('setup_type');
        Setup_Model::reset_coa_tax($this->session->userdata('user'));
        redirect('setup', 'refresh');
    }

    public function get_profile(){
        echo json_encode(['data' => Setup_Model::get_profile($this->session->userdata('user'))]);
    }

    public function edit_profile(){
        $co_ba_number = $this->input->get('co_ba_number');
        $co_ba_street = $this->input->get('co_ba_street');
        $co_ba_brangay = $this->input->get('co_ba_brangay');
        $co_ba_city = $this->input->get('co_ba_city');
        $co_ba_province = $this->input->get('co_ba_province');
        $co_ba_zip = $this->input->get('co_ba_zip');
        $data = [
                    'ch_cb_name' => $this->input->get('company_name'),
                    'ch_cb_trade_name' => $this->input->get('trade_name'),
                    'ch_name' => $this->input->get('company_name'),
                    'ch_cb_address' => $co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
                    'ch_cb_tin' => $this->input->get('tin'),
                    'ch_cb_class' => 'company',
                    'ch_cb_bp_type' => '',
                    'ch_cb_tax_type' => $this->input->get('tax_type'),
                    'ch_cb_cno' => $this->input->get('contact_number'),
                    'ch_cb_email' => $this->input->get('email'),
                ];
        Setup_Model::edit_profile($data, $this->session->userdata('user'));
    }

    public function add_branch(){
        $co_ba_number = $this->input->get('br_ba_number');
        $co_ba_street = $this->input->get('br_ba_street');
        $co_ba_brangay = $this->input->get('br_ba_barangay');
        $co_ba_city = $this->input->get('br_ba_city');
        $co_ba_province = $this->input->get('br_ba_province');
        $co_ba_zip = $this->input->get('br_ba_zip');
        $data = [
                'cb_trade_name' => $this->input->get('branch_name'),
                'cb_name' => $this->input->get('branch_name'),
                'name' => $this->input->get('branch_name'),
                'cb_address' => $co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
                'cb_tin' => $this->input->get('branch_tin'),
                'cb_cno' => $this->input->get('branch_cno'),
                'cb_email' => $this->input->get('branch_email'),
                'tax_type' => $this->input->get('branch_tax_type')
            ];
        Setup_Model::add_branch($this->session->userdata('user')->cb_id, $data);
    }

    public function edit_branch(){
        $co_ba_number = $this->input->get('br_ba_number');
        $co_ba_street = $this->input->get('br_ba_street');
        $co_ba_brangay = $this->input->get('br_ba_barangay');
        $co_ba_city = $this->input->get('br_ba_city');
        $co_ba_province = $this->input->get('br_ba_province');
        $co_ba_zip = $this->input->get('br_ba_zip');
        $data = [
                'ch_cb_name' => $this->input->get('branch_name'),
                'ch_cb_trade_name' => $this->input->get('branch_name'),
                'ch_name' => $this->input->get('branch_name'),
                'ch_cb_address' => $co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
                'ch_cb_tin' => $this->input->get('branch_tin'),
                'ch_cb_cno' => $this->input->get('branch_cno'),
                'ch_cb_email' => $this->input->get('branch_email'),
                'ch_cb_tax_type' => $this->input->get('branch_tax_type')
            ];
        $id = $this->input->get('edit-id');
        Setup_Model::edit_branch($id, $data);
    }

    public function delete_branch(){
        Setup_Model::delete_branch($this->input->get('cb_id'), $this->input->get('cbbr_id'));
    }

    public function get_tin_tax_type(){
        echo json_encode(Setup_Model::get_tin_tax_type($this->session->userdata('user')->cb_id));
    }

    public function get_users(){
        echo json_encode(['data' => Setup_Model::get_users($this->session->userdata('user'))]);
    }

    public function get_branch_list(){
        echo json_encode(Setup_Model::get_branch_list($this->session->userdata('user')->cb_id));
    }

    public function add_user(){
        $profile = [
                    'p_fname' => $this->input->get('add-fname'),
                    'p_mname' => $this->input->get('add-mname'),
                    'p_lname' => $this->input->get('add-lname'),
                    'p_address' => $this->input->get('add-user-address'),
                    'p_cno' => $this->input->get('add-user-cno'),
                    'p_email' => $this->input->get('add-user-email'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];

        $user = [
                    'u_name' => $this->input->get('add-user-username'),
                    'u_pass' => password_hash($this->input->get('add-user-username'), PASSWORD_BCRYPT, ['cost' => 11]),
                    'u_type' => $this->input->get('add-user-access-level'),
                    'u_company' => 'company',
                    'subs_type' => $this->session->userdata('user')->subs_type,
                    'subs_exp_date' => $this->session->userdata('user')->subs_exp_date,
                    'setup' => '0',
                    'cbbr_id' => $this->input->get('add-user-branch') === '' ? $this->session->userdata('user')->cbbr_id : $this->input->get('add-user-branch'),
                    'u_validity_date' => $this->input->get('add-user-validity-date')
                ];

        Setup_Model::add_user($profile, $user);
    }

    public function check_username(){
       echo Setup_Model::check_username($this->input->get('data'));
    }

    public function edit_user(){
        $profile = [
                    'p_fname' => $this->input->get('edit-fname'),
                    'p_mname' => $this->input->get('edit-mname'),
                    'p_lname' => $this->input->get('edit-lname'),
                    'p_address' => $this->input->get('edit-user-address'),
                    'p_cno' => $this->input->get('edit-user-cno'),
                    'p_email' => $this->input->get('edit-user-email')
                ];

        $user = [
                    'u_name' => $this->input->get('edit-user-username'),
                    'u_pass' => password_hash($this->input->get('edit-user-username'), PASSWORD_BCRYPT, ['cost' => 11]),
                    'u_type' => $this->input->get('edit-user-access-level'),
                    'cbbr_id' => $this->input->get('edit-user-branch'),
                    'u_validity_date' => $this->input->get('edit-user-validity-date')
                ];
        $p_id = $this->input->get('edit-profile-id');
        $u_id = $this->input->get('edit-user-id');

        Setup_Model::edit_user($profile, $user, $p_id, $u_id);
    }

    public function delete_user(){
        $p_id = $this->input->get('p_id');
        $u_id = $this->input->get('u_id');
        Setup_Model::delete_user($p_id, $u_id);
    }

    public function get_branches(){
        echo json_encode(['data' => Setup_Model::get_branches($this->session->userdata('user')->cb_id)]);
    }

    // public function table_get_employees(){
    //     echo json_encode(['data' => Setup_Model::get_users($this->session->userdata('user')->cbbr_id, $this->session->userdata('user')->p_id)]);
    // }

    public function table_get_branches($slug){
        echo json_encode(['data' => Setup_Model::table_get_branches($this->session->userdata('user')->cb_id, $slug)]);
    }

    public function get_user_available_branch(){
        echo json_encode(Setup_Model::get_user_available_branch($this->session->userdata('user')->cb_id, $this->input->get('p_id')));
    }

    public function get_user_available_branch_edit(){
        echo json_encode(Setup_Model::get_user_available_branch_edit($this->session->userdata('user')->cb_id, $this->input->get('p_id'), $this->input->get('br_id')));
    }

    public function add_user_branch(){
        $u_company = $this->session->userdata('user')->u_company;
        $subs_type = $this->session->userdata('user')->subs_type;
        $subs_exp_date = $this->session->userdata('user')->subs_exp_date;

        $user = [
                    'u_name' => $this->input->get('add-username'),
                    'u_pass' => $this->input->get('add-password'),
                    'u_type' => $this->input->get('add-type'),
                    'u_company' => $u_company,
                    'subs_type' => $subs_type,
                    'subs_exp_date' => $subs_exp_date,
                    'setup' => '0',
                    'p_id' => $this->input->get('add-p-id'),
                    'cbbr_id' => $this->input->get('add-branch'),
                ];
        Setup_Model::add_user_branch($user);
    }

    public function edit_user_branch(){
        $data = [
                    'u_name' => $this->input->get('edit-username'),
                    'u_pass' => $this->input->get('edit-password'),
                    'cbbr_id' => $this->input->get('edit-branch'),
                    'u_type' => $this->input->get('edit-type'),
                    'u_id' => $this->input->get('edit-u-id')
                ];
        Setup_Model::edit_user_branch($data);  
    }

    public function delete_user_branch(){
        Setup_Model::delete_user_branch($this->input->get('u_id'));
    }

    public function get_coa_lvl1(){
        echo json_encode(['data' => Setup_Model::get_coa_lvl1($this->session->userdata('user')->cb_id)]);
    }
    public function get_coa_lvl2($slug){
        echo json_encode(['data' => Setup_Model::get_coa_lvl2($slug, $this->session->userdata('user')->cb_id)]);
    }
    public function get_coa_lvl3($slug){
        echo json_encode(['data' => Setup_Model::get_coa_lvl3($slug, $this->session->userdata('user')->cb_id)]);
    }
    public function get_coa_lvl4($slug){
        echo json_encode(['data' => Setup_Model::get_coa_lvl4($slug, $this->session->userdata('user')->cb_id)]);
    }
    public function get_coa_lvl5($slug){
        echo json_encode(['data' => Setup_Model::get_coa_lvl5($slug, $this->session->userdata('user')->cb_id)]);
    }
    public function get_coa_lvl6(){
        echo json_encode(['data' => Setup_Model::get_coa_lvl6($this->session->userdata('user')->cb_id)]);
    }
    // public function get_level_4(){
    //     echo json_encode(Setup_Model::get_level_4($this->session->userdata('user')->cb_id));
    // }
    public function get_level_5(){
        echo json_encode(Setup_Model::get_level_5($this->session->userdata('user')->cb_id));
    }
    public function get_tax($slug){
        echo json_encode(['data' => Setup_Model::get_tax($slug, $this->session->userdata('user'))]);
    }
    public function add_tax(){
        $data = [
            't_name' => $this->input->get('add-name'),
            't_shortname' => $this->input->get('add-shortname'),
            't_rate' => $this->input->get('add-rate'),
            't_base' => $this->input->get('add-base'),
            'tt_id' => $this->input->get('add-type'),
            't_company' => 'company',
            't_setup_company' => 'company'
        ];
        Setup_Model::add_tax($data, $this->session->userdata('user'));
    }
    public function edit_tax(){
        $data = [
            't_code' => $this->input->get('edit-code'),
            't_name' => $this->input->get('edit-name'),
            't_shortname' => $this->input->get('edit-shortname'),
            't_rate' => $this->input->get('edit-rate'),
            't_base' => $this->input->get('edit-base'),
            'tt_id' => $this->input->get('edit-type')
        ];
        $id = $this->input->get('edit-t-id');
        Setup_Model::edit_tax($data, $id, $this->session->userdata('user'));
    }
    public function delete_tax(){
        Setup_Model::delete_tax($this->input->get('t_id'));
    }


    public function get_tax_types_list(){
        echo json_encode(Setup_Model::get_tax_types_list($this->session->userdata('user')));
    }
    public function get_tax_types(){
        echo json_encode(['data' => Setup_Model::get_tax_types($this->session->userdata('user'))]);
    }
    public function add_tax_types(){
        $data = [
                    'tt_name' => $this->input->get('add-name'),
                    'tt_shortname' => $this->input->get('add-shortname'),
                    'tt_company' => 'company',
                    'tt_setup_company' => 'company'
                ];
        Setup_Model::add_tax_types($data, $this->session->userdata('user'));
    }
    public function edit_tax_types(){
        $data = [
                    'tt_code' => $this->input->get('edit-code'),
                    'tt_name' => $this->input->get('edit-name'),
                    'tt_shortname' => $this->input->get('edit-shortname')
                ];
        $edit_id = $this->input->get('edit-tt-id');
        Setup_Model::edit_tax_types($data, $edit_id, $this->session->userdata('user'));
    }
    public function delete_tax_types(){
        Setup_Model::delete_tax_types($this->input->get('id'));
    }

    public function add_coa_lvl1(){
        $data = [
                    'lvl_1_name' => $this->input->get('add-lvl-1-name'),
                    'lvl_1_company' => 'company',
                    'lvl_1_setup_company' => 'company',
                ];
        Setup_Model::add_coa_lvl1($data, $this->session->userdata('user'));
    }

    public function edit_coa_lvl1(){
        $data = [
                    'lvl_1_code' => $this->input->get('edit-lvl-1-code'),
                    'lvl_1_name' => $this->input->get('edit-lvl-1-name')
        ];
        Setup_Model::edit_coa_lvl1($data, $this->input->get('edit-id'), $this->session->userdata('user'));
    }

    public function delete_coa_lvl1(){
        Setup_Model::delete_coa_lvl1($this->input->get('id'));
    }

    public function get_level_1(){
        echo json_encode(Setup_Model::get_level_1($this->session->userdata('user')));
    }

    public function add_coa_lvl2(){
        $data = [
                    'lvl_2_name' => $this->input->get('add-lvl-2-name'),
                    'lvl_2_company' => 'company',
                    'lvl_2_setup_company' => 'company'
                ];
        Setup_Model::add_coa_lvl2($data, $this->input->get('lvl-1-id'), $this->session->userdata('user'));
    }

    public function edit_coa_lvl2(){
        $data = [
                    'lvl_2_code' => $this->input->get('edit-lvl-2-code'),
                    'lvl_2_name' => $this->input->get('edit-lvl-2-name')
                ];
        $lvl_1_id = $this->input->get('lvl-1-id');
        $edit_id = $this->input->get('edit-id');
        Setup_Model::edit_coa_lvl2($data, $lvl_1_id, $edit_id, $this->session->userdata('user'));
    }

    public function delete_coa_lvl2(){
        Setup_Model::delete_coa_lvl2($this->input->get('id'));
    }

    public function get_level_2(){
        echo json_encode(Setup_Model::get_level_2($this->session->userdata('user')));
    }

    public function add_coa_lvl3(){
        $data = [
                    'lvl_3_name' => $this->input->get('add-lvl-3-name'),
                    'lvl_3_company' => 'company',
                    'lvl_3_setup_company' => 'company'
                ];
        Setup_Model::add_coa_lvl3($data, $this->input->get('lvl-2-id'), $this->session->userdata('user'));
    }

    public function edit_coa_lvl3(){
        $data = [
                    'lvl_3_code' => $this->input->get('edit-lvl-3-code'),
                    'lvl_3_code_int' => floatval($this->input->get('edit-lvl-3-code')),
                    'lvl_3_name' => $this->input->get('edit-lvl-3-name')
                ];
        $lvl_2_id = $this->input->get('lvl-2-id');
        $edit_id = $this->input->get('edit-id');
        Setup_Model::edit_coa_lvl3($data, $lvl_2_id, $edit_id, $this->session->userdata('user'));
    }

    public function delete_coa_lvl3(){
        Setup_Model::delete_coa_lvl3($this->input->get('id'));
    }

    public function get_level_3(){
        echo json_encode(Setup_Model::get_level_3($this->session->userdata('user')));
    }

    public function add_level_4(){
        $data = [
                    'lvl_4_name' => $this->input->get('add-lvl-4-name'),
                    'lvl_4_company' => 'company',
                    'lvl_4_setup_company' => 'company',
                    'bir' => $this->input->get('bir')
                ];
        Setup_Model::add_level_4($data, $this->input->get('lvl-3-id'), $this->session->userdata('user'));
    }

    public function edit_level_4(){
        $data = [
                    'lvl_4_code' => $this->input->get('edit-lvl-4-code'),
                    'lvl_4_name' => $this->input->get('edit-lvl-4-name'),
                    'bir' => $this->input->get('bir')
                ];
        $lvl_3_id = $this->input->get('lvl-3-id');
        $edit_id = $this->input->get('edit-id');
        Setup_Model::edit_level_4($data, $lvl_3_id, $edit_id, $this->session->userdata('user'));
    }

    public function delete_level_4(){
        Setup_Model::delete_level_4($this->input->get('id'));
    }

    public function get_level_4(){
        echo json_encode(Setup_Model::get_level_4($this->session->userdata('user')));
    }

    public function add_level_5(){
        $data = [
                    'lvl_5_name' => $this->input->get('lvl-5-name'),
                    'lvl_5_company' => 'company',
                    'lvl_5_setup_company' => 'company'
                ];
        Setup_Model::add_level_5($data, $this->input->get('lvl-4-id'), $this->session->userdata('user'));
    }

    public function edit_level_5(){
        $data = [
                    'lvl_5_code' => $this->input->get('edit-lvl-5-code'),
                    'lvl_5_name' => $this->input->get('edit-lvl-5-name')
                ];
        $lvl_4_id = $this->input->get('lvl-4-id');
        $edit_id = $this->input->get('edit-id');
        Setup_Model::edit_level_5($data, $lvl_4_id, $edit_id, $this->session->userdata('user'));
    }

    public function delete_level_5(){
        Setup_Model::delete_level_5($this->input->get('id'));
    }

    public function finish_setup(){
        $super_admin = Setup_Model::finish_setup($this->session->userdata('user'));
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
                        <title>Your account is ready!</title>
                    </head>
                    <body>
                        <div style="width: 70%; border: 1.5px solid rgb(221, 221, 221); padding: 15px 30px; margin: 0 auto; font-family: Arial, Verdana, Helvetica, sans-serif;">
                            <div>
                                <img class="logo" src="http://122.54.101.87/docpro/assets/img/250x250.png" style="width: 180px; margin: 0 auto; display: table">
                            </div>
                            <p style="font-size: 15px;">Hello '.$super_admin->p_fname.' '.$super_admin->p_lname.',</p>
                            <br></br>
                            <p style="font-size: 15px;">Your account is now ready with super admin privilage. Please login on DocPro Accounting System using your account listed below to enjoy our excellent quality service. Thank you and have a good day!</p>
                            <br></br>
                            <p style="font-weight: bold; font-size: 16px;">Your Account!</p>
                            <p style="font-size: 15px;">Username: <span style="font-size: 12px;">'.$super_admin->u_name.'</span></p>
                            <p style="font-size: 15px;">Password: <span style="font-size: 12px;">'.$super_admin->u_name.'</span></p>
                            <br></br>
                            <a href="http://122.54.101.87/docpro" style="padding: 15px 20px; text-transform: uppercase; font-size: 18px; text-align: center; line-height: 22px; background-color: rgb(26, 173, 85); color: #FFF; text-decoration: none; width: 190px; display: block; margin: 0 auto;">Login</a>
                            <br></br>
                        </div>
                    </body>
                </html>';

        $result = $this->email
                ->from('docpro01docpro@gmail.com', 'DOCPro Business Solution')
                ->to($super_admin->p_email)
                ->subject('Your account is ready!')
                ->message($body)
                ->send();

        // if ($result) {
        //     redirect('logout');
        // }else{
        //     var_dump($result);
        //     exit;
        // }
        redirect('logout');
    }

// OLD

    public function add_coa_lvl5(){
        $data = [
                'lvl_5_name' => $this->input->get('add-lvl-5-name'),
                'lvl_5_company' => 'company',
                'lvl_5_setup_company' => 'company',
                'lvl_4_id' => $this->input->get('add-lvl-4'),
                'cb_id' => $this->session->userdata('user')->cb_id
        ];
        Setup_Model::add_coa_lvl5($data);
    }

    public function edit_coa_lvl5(){
        $data = [
            'lvl_5_code' => $this->input->get('edit-lvl-5-code'),
            'lvl_5_name' => $this->input->get('edit-lvl-5-name'),
            'lvl_5_id' => $this->input->get('edit-lvl-5-id'),
            'lvl_4_id' => $this->input->get('edit-lvl-4'),
            'cb_id' => $this->session->userdata('user')->cb_id
        ];
        Setup_Model::edit_coa_lvl5($data);
    }

    public function delete_coa_lvl5(){
        $data = [
            'lvl_5_id' => $this->input->get('lvl_5_id'),
            'coalvl45_id' => $this->input->get('coalvl45_id')
        ];
        Setup_Model::delete_coa_lvl5($data);
    }

    public function add_coa_lvl6(){
        $data = [
                'lvl_6_name' => $this->input->get('add-lvl-6-name'),
                'lvl_6_company' => 'company',
                'lvl_6_setup_company' => 'company',
                'lvl_5_id' => $this->input->get('add-lvl-5'),
                'cb_id' => $this->session->userdata('user')->cb_id
        ];
        Setup_Model::add_coa_lvl6($data);
    }

    public function edit_coa_lvl6(){
        $data = [
                'lvl_6_code' => $this->input->get('edit-lvl-6-code'),
                'lvl_6_name' => $this->input->get('edit-lvl-6-name'),
                'lvl_6_id' => $this->input->get('edit-lvl-6-id'),
                'lvl_5_id' => $this->input->get('edit-lvl-5'),
                'cb_id' => $this->session->userdata('user')->cb_id
        ];
        Setup_Model::edit_coa_lvl6($data);
    }

    public function delete_coa_lvl6(){
        $data = [
                'lvl_6_id' => $this->input->get('lvl_6_id'),
                'coalvl56_id' => $this->input->get('coalvl56_id')
        ];
        Setup_Model::delete_coa_lvl6($data);
    }

    public function verify_setup(){
        echo json_encode(Setup_Model::verify_setup($this->session->userdata('user')));
    }

    public function enable_coa_lvl1(){
        Setup_Model::enable_coa_lvl1($this->input->get('id'));
    }

    public function disable_coa_lvl1(){
        Setup_Model::disable_coa_lvl1($this->input->get('id'));
    }

    public function enable_coa_lvl2(){
        Setup_Model::enable_coa_lvl2($this->input->get('id'));
    }

    public function disable_coa_lvl2(){
        Setup_Model::disable_coa_lvl2($this->input->get('id'));
    }

    public function enable_coa_lvl3(){
        Setup_Model::enable_coa_lvl3($this->input->get('id'));
    }

    public function disable_coa_lvl3(){
        Setup_Model::disable_coa_lvl3($this->input->get('id'));
    }

    public function enable_coa_lvl4(){
        Setup_Model::enable_coa_lvl4($this->input->get('id'));
    }

    public function disable_coa_lvl4(){
        Setup_Model::disable_coa_lvl4($this->input->get('id'));
    }

    public function enable_coa_lvl5(){
        Setup_Model::enable_coa_lvl5($this->input->get('id'));
    }

    public function disable_coa_lvl5(){
        Setup_Model::disable_coa_lvl5($this->input->get('id'));
    }

    public function enable_tax_type(){
        Setup_Model::enable_tax_type($this->input->get('id'));
    }

    public function disable_tax_type(){
        Setup_Model::disable_tax_type($this->input->get('id'));
    }

    public function enable_tax(){
        Setup_Model::enable_tax($this->input->get('id'));
    }

    public function disable_tax(){
        Setup_Model::disable_tax($this->input->get('id'));
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

// OLD VERSION

    public function class_list(){
        echo json_encode(Setup_Model::class_list());
    }

    public function tax_list(){
        echo json_encode(Setup_Model::tax_list());
    }

    public function bp_type_list(){
        echo json_encode(Setup_Model::bp_type_list());
    }

    public function bank_list(){
        echo json_encode(Setup_Model::bank_list());
    }
}