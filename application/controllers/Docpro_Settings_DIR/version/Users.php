<?php
class Users extends CI_Controller{
    function __construct(){
        parent::__construct();
        if(!$this->session->userdata('logged_in')){redirect('login', 'refresh');}
    }
    public function get(){
        echo json_encode(array('data' => Users_Model::get($this->session->userdata('user')->cb_id)));
    }
    public function add(){
        $hash_options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];
        $profiles_data = array(
                                'p_fname'=>$this->input->post('add-fname'), 
                                'p_mname'=>$this->input->post('add-mname'), 
                                'p_lname'=>$this->input->post('add-lname'), 
                                'p_address'=>$this->input->post('add-address'), 
                                'p_cno'=>$this->input->post('add-cno'), 
                                'p_email'=>$this->input->post('add-email'), 
                                'cb_id'=>$this->input->post('add-cb-id'),
                              );
        $p_insert_id = Profiles_Model::add($profiles_data);
        $users_data = array(
                              'u_name'=>$this->input->post('add-username'), 
                              'u_pass'=>password_hash($this->input->post('add-password'), PASSWORD_BCRYPT, $hash_options),
                              'u_type'=>$this->input->post('add-user-type'), 
                              'subs_exp_date'=>date('Y-m-d', strtotime('+30 days')), 
                              'setup'=> ($this->input->post('add-user-type') === 'Admin') ? '1' : '0',
                              'p_id'=>$p_insert_id
                            );
        if($this->input->post('add-password') == NULL){
          unset($users_data['u_pass']);
        }
        $u_insert_id = Users_Model::add($users_data);
        $code = array('u_code'=>$u_insert_id);
        Users_Model::edit($u_insert_id, $code);
        redirect('docpro_settings/users', 'refresh');
    }
    public function edit(){
        $hash_options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];
        $p_id = $this->input->post('p-id');
        $profiles_data = array('p_fname'=>$this->input->post('edit-fname'),
                               'p_mname'=>$this->input->post('edit-mname'),
                               'p_lname'=>$this->input->post('edit-lname'),
                               'p_address'=>$this->input->post('edit-address'),
                               'p_cno'=>$this->input->post('edit-cno'),
                               'p_email'=>$this->input->post('edit-email'),
                               'cb_id'=>$this->input->post('edit-cb-id'));
        Profiles_Model::edit($p_id, $profiles_data);
        $id = $this->input->post('edit-id');
        $users_data = array('u_name'=>$this->input->post('edit-uname'),
                            'u_code'=>$id,
                            'u_pass'=>password_hash($this->input->post('edit-npass'), PASSWORD_BCRYPT, $hash_options),
                            'u_type'=>$this->input->post('edit-user-type'),
                            'setup'=>($this->input->post('edit-user-type') === 'Admin') ? '1' : '0',
                            'p_id'=>$p_id
                          );
        if($this->input->post('edit-npass') == NULL){
          unset($users_data['u_pass']);
        }
        Users_Model::edit($id, $users_data);
        redirect('docpro_settings/users', 'refresh');
    }
}