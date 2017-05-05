<?php


class Users extends CI_Model
{
    private $table ='users';
    public function __construct() 
    {
        parent::__construct();
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
}
