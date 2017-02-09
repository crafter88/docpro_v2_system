<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Users_Model::get($this->session->userdata('user')->u_id, $this->session->userdata('user')->cb_id)));
    }
    public function check_username(){
       echo Users_Model::check_username($this->input->get('data'));
    }
    public function add(){
        $profiles_data = [
                          'p_fname'=>$this->input->post('add-fname'), 
                          'p_mname'=>$this->input->post('add-mname'), 
                          'p_lname'=>$this->input->post('add-lname'), 
                          'p_address'=>$this->input->post('add-address'), 
                          'p_cno'=>$this->input->post('add-cno'), 
                          'p_email'=>$this->input->post('add-email'),
                          'cb_id'=>$this->session->userdata('user')->cb_id,
                        ];
        $profile_id = Profiles_Model::add($profiles_data, $this->session->userdata('user')->cb_id);
        $users_data = [
                        'u_name'=>$this->input->post('add-username'), 
                        'u_pass'=>password_hash($this->input->post('add-password'), PASSWORD_BCRYPT, ['cost' => 11]),
                        'u_type'=>$this->input->post('add-user-type'), 
                        'subs_exp_date'=>'0000-00-00', 
                        'setup'=> '0',
                        'subs_type'=>'premium',
                        'u_company'=>'docpro',
                        'p_id'=>$profile_id,
                        'cbbr_id'=>$this->session->userdata('user')->cbbr_id,
                      ];
        Users_Model::add($users_data);
        redirect('docpro_settings/users', 'refresh');
    }
    public function edit(){
        $p_id = $this->input->post('p-id');
        $profiles_data = [
                           'p_fname'=>$this->input->post('edit-fname'),
                           'p_mname'=>$this->input->post('edit-mname'),
                           'p_lname'=>$this->input->post('edit-lname'),
                           'p_address'=>$this->input->post('edit-address'),
                           'p_cno'=>$this->input->post('edit-cno'),
                           'p_email'=>$this->input->post('edit-email'),
                           'cb_id'=>$this->session->userdata('user')->cb_id,
                         ];
        Profiles_Model::edit($p_id, $profiles_data);
        $id = $this->input->post('edit-id');
        $users_data = [
                        'u_name'=>$this->input->post('edit-uname'),
                        'u_pass'=>password_hash($this->input->post('edit-npass'), PASSWORD_BCRYPT, ['cost' => 11]),
                        'u_type'=>$this->input->post('edit-user-type'),
                        'setup'=>'0',
                        'p_id'=>$p_id,
                        'cbbr_id'=>$this->session->userdata('user')->cbbr_id
                      ];
        if($this->input->post('edit-npass') == NULL){
          unset($users_data['u_pass']);
        }
        Users_Model::edit($id, $users_data);
        redirect('docpro_settings/users', 'refresh');
    }

    public function get_all_users(){
      echo json_encode(Users_Model::get_all_users());
    }
}