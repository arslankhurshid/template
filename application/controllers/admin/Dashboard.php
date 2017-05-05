<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dashboard
 *
 * @author Administrator
 */
class Dashboard extends CI_Controller{
    public function __construct() {
        
        parent::__construct();
        $this->load->helper('url');
//        $this->load->model('user', 'user_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('form');
        if(!$this->session->userdata('user')) {
            $this->session->set_flashdata('errors', 'You are not authorized!');
            redirect(base_url() . 'login/main');
        } 
    }
    public function index()
    {
        
       $data['header'] = $this->load->view('admin/layout/header', FALSE, TRUE);
       $data['sidebar'] = $this->load->view('admin/layout/sidebar', FALSE, TRUE); 
       $data['content'] = $this->load->view('admin/dashboard/content', false, TRUE);
       
       $this->load->view('admin/layout/main' , $data);
        
      
    }
    //put your code here
}
