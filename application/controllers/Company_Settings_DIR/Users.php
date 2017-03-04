<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Co_Users_Model::company_superadmin_users_get($this->session->userdata('user'))));
    }
    public function add(){
        $profile = [
                    'p_fname' => $this->input->post('add-fname'),
                    'p_mname' => $this->input->post('add-mname'),
                    'p_lname' => $this->input->post('add-lname'),
                    'p_address' => $this->input->post('add-address'),
                    'p_cno' => $this->input->post('add-cno'),
                    'p_email' => $this->input->post('add-email'),
                    'cb_id' => $this->session->userdata('user')->cb_id
                ];
        $user = [
                    'u_name' => $this->input->post('add-username'),
                    'u_pass' => password_hash($this->input->post('add-username'), PASSWORD_BCRYPT, ['cost' => 11]
),                    
                    'u_type' => $this->input->post('add-user-access-level'),
                    'u_company' => 'company',
                    'subs_type' => $this->session->userdata('user')->subs_type,
                    'subs_exp_date' => $this->session->userdata('user')->subs_exp_date,
                    'setup' => '0',
                    'cbbr_id' => $this->input->post('add-branch'),
                    'u_validity_date' => $this->input->post('add-validity-date')
                ];

        Co_Users_Model::add($profile, $user);
        redirect('company_settings/users', 'refresh');
    }
    public function edit(){
        $profile = [
                    'p_fname' => $this->input->post('edit-fname'),
                    'p_mname' => $this->input->post('edit-mname'),
                    'p_lname' => $this->input->post('edit-lname'),
                    'p_address' => $this->input->post('edit-address'),
                    'p_cno' => $this->input->post('edit-cno'),
                    'p_email' => $this->input->post('edit-email')
                ];
        $user = [
                    'u_name' => $this->input->post('edit-username'),
                    'u_type' => $this->input->post('edit-user-access-level'),
                    'u_validity_date' => $this->input->post('edit-validity-date'),
                ];
        if(strlen($this->input->post('edit-password')) !== 0){
            $user['u_pass'] = password_hash($this->input->post('edit-password'), PASSWORD_BCRYPT, ['cost' => 11]);
        }
        $u_id = $this->input->post('u-id');
        $p_id = $this->input->post('p-id');
        Co_Users_Model::edit($profile, $user, $p_id, $u_id);
        redirect('company_settings/users', 'refresh');
    }

    public function get_branches(){
        echo json_encode(Co_Users_Model::get_branches($this->session->userdata('user')));
    }
    public function add_branch(){
        $co_ba_number = $this->input->post('br_ba_number');
        $co_ba_street = $this->input->post('br_ba_street');
        $co_ba_brangay = $this->input->post('br_ba_barangay');
        $co_ba_city = $this->input->post('br_ba_city');
        $co_ba_province = $this->input->post('br_ba_province');
        $co_ba_zip = $this->input->post('br_ba_zip');
        $data = [
            'cb_name' => $this->input->post('branch_name'),
            'name' => $this->input->post('branch_name'),
            'cb_address' => $co_ba_number.';'.$co_ba_street.';'.$co_ba_brangay.';'.$co_ba_city.';'.$co_ba_province.';'.$co_ba_zip,
            'cb_tin' => $this->input->post('branch_tin'),
            'cb_class' => 'branch',
            'cb_bp_type' => 'Non-Individual',
            'cb_tax_type' => $this->input->post('branch_tax_type'),
            'cb_seq' => $this->session->userdata('user')->ch_cb_seq,
            'cb_cno' => $this->input->post('branch_cno'),
            'cb_email' => $this->input->post('branch_email')
        ];
        $id = CB_Br_Model::add($data, $this->session->userdata('user'));
        echo json_encode(['id' => $id]);
    }
    public function filter_table(){
        $filter1 = $this->input->get('filter1');
        echo json_encode(['data' => Co_Users_Model::filter_table($this->session->userdata('user'), $filter1)]);
    }
}