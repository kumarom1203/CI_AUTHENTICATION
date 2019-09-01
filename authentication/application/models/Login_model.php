<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function doLogin_model($username, $password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->where('deleted_at', NULL);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row_array();
        } else {
            $res = array(
                'username' => null,
                'loginaccess' => 0
            );
            return $res;
        }
    }
    function checkIfExist_model($email){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('deleted_at!=', NULL);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return $query->row_array();
        } else {
            return 0;
        }
    }

    function doSignup_model($data, $email){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('email', $email);
        $this->db->where('deleted_at', NULL);
        $query = $this->db->get();
        if ($query->num_rows()) {
            return 0;
        } else {
             $this->db->insert('users', $data);
             return 1;
        }
    }
}