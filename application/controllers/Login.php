<?php
class Login extends MY_Controller{
    function __construct(){
        parent::__construct('fragments_public/master_layout');
        if($this->session->userdata('logged_in')){
            if($this->session->userdata('user')->u_type === 'Super Admin' && $this->session->userdata('user')->u_company === 'docpro'){
                redirect('docpro_setup', 'refresh');
            }
            if($this->session->userdata('user')->setup){
                redirect('setup', 'refresh');
            }
            
            redirect('home', 'refresh');
        }
    }
    public function index(){
        $data = array('header_css' => 'fragments_public/css/login', 'content' => 'login', 'footer_js' => 'fragments_public/js/login', 'active_nav' => 'login', 'auth_msg' => $this->session->flashdata('auth_msg'));
        $this->load->view($this->layout, $data);
    }
    public function postLogin(){
        $user = Users_Model::Login($this->input->post('username'), $this->input->post('password'));
        if($user === false){
            $this->session->set_flashdata('auth_msg', 'Incorrect username/password');
            redirect('login', 'refresh');
    	}else{
            $this->session->set_userdata('logged_in', ['id'=>$user->u_id, 'username'=>$user->u_name, 'level'=>$user->u_type, 'company'=>$user->cb_id]);
            $this->session->set_userdata('user', $user);

            if($user->u_type === 'Super Admin' && $user->u_company === 'docpro'){
                redirect('docpro_setup', 'refresh');
            }
            if($user->u_type === 'Super Admin' && $user->u_company === 'company' && $user->setup === '1'){
                redirect('setup', 'refresh');
            }
            if($user->u_type === 'Registrant' && $user->u_flag === '1'){
                redirect('setup', 'refresh');
            }
            if($user->u_type === 'Registrant' && $user->u_flag === '0'){
                redirect('setup_complete', 'refresh');
            }
            redirect('home', 'refresh');
           
    	}
    }
}