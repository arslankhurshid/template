<?php


class Main extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
         $this->load->helper('security');
//        $this->load->model('login_database');
        
    }
    
    public function index()
    {
        $this->login();
    }
    
    public function login()
    {
        $this->load->view('admin/layout/login_form');
    }
    
    public function validation_rules()
    {
        $this->form_validation->set_rules('user_name', 'Username', 'trim|required');
//        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        
        return $this->form_validation;
    }
    
    public function login_validation()
    {

       $this->form_validation = $this->validation_rules();
       
       if($this->form_validation->run() == FALSE)
       {
           $this->session->set_flashdata('errors', validation_errors());
           redirect(base_url() . 'login/main');
           
       }
       else 
       {
           $this->login_process();
       }
        
    }
    
    public function login_process()
    {
        $this->load->model('admin/users');
        if($this->users->verifyUser() == TRUE)
        {
            $data = array('is_logged_in' => 1, 'user_name' => $this->input->post('user_name'));
            $this->session->set_userdata(['user' =>  $data]);
            redirect('admin/Dashboard');
        }
        else 
        {
//            $this->form_validation->set_message('check_information', 'Incorrect username/password');
            $this->session->set_flashdata('errors', 'Incorrect information');
           redirect(base_url() . 'login/main');
           //return false;
        }
    }
    
    public function logout()
    {
       
        $this->session->unset_userdata('user');
        $this->session->sess_destroy(); 
        
        redirect(base_url(). 'login/main');
    }
    
    
    
    
}