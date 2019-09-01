<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('all_log_helper')){	
    function all_log_helper($table, $data){
		$ci =& get_instance();
        $ci->load->database();
        $ci->db->insert($table, $data);
        return 0;  
    }
}
?>
