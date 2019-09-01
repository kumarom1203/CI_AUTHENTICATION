<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model("Home_model");
        $this->page_name = $_SERVER['PHP_SELF'];
        $this->server_ip = $_SERVER['REMOTE_ADDR'];
        if ($this->session->userdata('isLogin')) {
            $this->load->model("Home_model");
        } else {
            return redirect(base_url('Login/login'));
        }
    }


    public function index(){
        $id = $this->session->userdata('id');
        $result['data'] = $this->Home_model->getProfile_model($id);
        $this->load->view('home', $result);
        //$this->output->enable_profiler('true');
    }

    public function dashboard(){
        $result['user_log'] = $this->Home_model->userLog_model(10, 0);
        $result['active_users'] = $this->Home_model->activeUsers_model();
        $result['deleted_users'] = $this->Home_model->deletedUsers_model();
        //$this->output->enable_profiler('true');
        $this->load->view('dashboard', $result);
    }

    public function pagination($start=0){
        $this->load->library('pagination');
        $config['base_url'] = base_url('Home/pagination');
        $config['total_rows'] = $this->Home_model->countRow_model();
        $config['per_page'] = 4;
        $this->pagination->initialize($config);
        $result['user_log'] = $this->Home_model->userLog_model($config['per_page'], $start);
        $result['page_link'] = $this->pagination->create_links();
        $this->load->view('pagination', $result);
        //$this->output->enable_profiler('true');
    }


    public function deleteAccount(){
        $id = $this->session->userdata('id');
        $this->Home_model->deleteAccount_model($id);
        $table = 'user_logs';
        $log_data = array(
            'user_id'  => $this->session->userdata('username'),
            'login_via'  => '',
            'ip_address'  => $this->server_ip,
            'action_page'  => $this->page_name,
            'remarks'  => 'User Deleted'
        );
        $admin_activity = all_log_helper($table, $log_data); 

        $this->session->set_flashdata('error_msg', 'Your Account Deleted');
        return redirect(base_url('Login/signup'));
    }


    public function ajax(){
        print_r(json_encode($this->Home_model->getProfile_model()));
    }
}