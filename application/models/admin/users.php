<?php


class Users extends CI_Model
{
    private $table ='users';
    public function __construct() 
    {
        parent::__construct();
//        $this->load->helper('input');
    }
    
    
    public function verifyUser()
    {
        $this->db->where('user_name', $this->input->post('user_name'));
        $this->db->where('password', $this->input->post('pwd'));

        $query = $this->db->get($this->table);
        if($query->num_rows() == 1)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    
    public function email_exists($email)
    {
        $this->db->where('email', $email);
        
        $query = $this->db->get($this->table);
        $row = $query->row();
        if($query->num_rows() === 1)
        {
            return $row->first_name;
//            exit();
        }
        else
        {
            return FALSE;
        }
    }
    /*
     * to check if email code is not mixed up with any other email
     */
    public function verify_email_code($email, $email_code)
    {
        $this->db->where('email', $email);
        $query = $this->db->get($this->table);
        $row = $query->row();
        
        if($query->num_rows() === 1)
        {
            if($email_code = md5($this->config->item('salt'). $row->first_name))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        
        }
    }
    
    public function update_pwd_to_db()
    {

        $user['password'] = $_POST['pwd'];
        $this->db->where('email', $_POST['email']);
        $this->db->update($this->table, $user);
        

        return TRUE;
    }
}
