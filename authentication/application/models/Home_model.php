<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }


    function getProfile_model($id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }

    function userLog_model($per_page, $start){
        $this->db->select('*');
        $this->db->from('user_logs');
        $this->db->limit($per_page, $start);
        $query = $this->db->get();
        return $query->result_array();
    }

    function activeUsers_model(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('deleted_at', NULL);
        $query = $this->db->get();
        return $query->result_array();
    }

    function deletedUsers_model(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('deleted_at!=', NULL);
        $query = $this->db->get();
        return $query->result_array();
    }

    function deleteAccount_model($id){
        $data = array('deleted_at' => date('Y-m-d H:i:s') );
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return 0;
    }
    function countRow_model(){
        $this->db->select('count(id) as total');
        $this->db->from('user_logs');
        $query = $this->db->get();
        return $query->row_array()['total'];
    }


}
