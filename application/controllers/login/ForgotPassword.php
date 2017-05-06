<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ForgotPassword
 *
 * @author Administrator
 */
class ForgotPassword extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->model('admin/users');
    }
    
    public function index()
    {
        $this->load->view('admin/login/reset_password');
    }
    
    public function resetPassword()
    {
        
        
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[6]|max_length[40]|valid_email');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors());
            
            redirect(base_url() . 'login/forgotpassword');
        }
        else
        {
            $email = $this->input->post('email');
            
            $result = $this->users->email_exists($email);

            if($result)
            {
                $this->send_reset_pwd_email($email, $result);
                $this->load->view('admin/login/emailsent', array('email' => $email));
            }
            else
            {
                $this->session->set_flashdata('errors', 'The email does not exists!');
                redirect(base_url(). 'login/forgotpassword');

            }
            
            
        }
    }
        
        
        
    public function send_reset_pwd_email($email, $firstName)
    {
    $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'm.arslan.khurshid@gmail.com',// your mail name
    'smtp_pass' => 'Arslan!2071',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1',
    'wordwrap' => TRUE
    );
       $this->load->library('email', $config);
       
       $email_code = md5($this->config->item('salt' . $firstName));
            
       $this->email->set_mailtype('html');
       $this->email->from('m.arslan.khurshid@gmail.com', 'System');
       $this->email->to($email);
       $this->email->subject('Reset Password');
       $message = 'Hello' . $firstName;
       echo $message .= '<a href="'.base_url().'login/ForgotPassword/reset_password_form/'.$email. '/' .$email_code.'" >click here!</a>'; 
       
       $this->email->message($message);
//       $this->email->send();
//       if($this->email->send())
//     {
//      echo 'Email sent.';
//     }
//     else
//    {
//     show_error($this->email->print_debugger());
//    }
    }
    
    public function reset_password_form($email, $email_code)
    {
        
        if(isset($email, $email_code))
        {
            $email = trim($email);
            $email_hash = sha1($email. $email_code);
            $verified = $this->users->verify_email_code($email, $email_code);
            
            if($verified)
            {
                $data['email'] = $email;
                $data['email_code'] = $email_code;
                $data['email_hash'] = $email_hash;
                $this->load->view('admin/login/update_password' , $data);
              
                
            }
        }
        
    }
    public function update_password()
    {
        $this->form_validation->set_rules('pwd', 'Password', 'required');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('errors', validation_errors());
            redirect();// where to redirect??
        }
        else 
        {
            $result = $this->users->update_pwd_to_db();
            if($result)
            {
                $this->session->set_flashdata('errors', 'Password updated successfully');
                redirect(base_url(). 'login/main');
            }
            
        }
    }
}
