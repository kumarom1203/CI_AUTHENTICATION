<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model("Login_model");
        $this->load->helper('security');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->page_name = $_SERVER['PHP_SELF'];
        $this->server_ip = $_SERVER['REMOTE_ADDR'];
    }


    public function index(){
        $this->load->view('welcome');
    }


    public function login(){
        $this->load->view('login');
    }


    public function doLogin(){
        $this->form_validation->set_rules('username', 'User Name', 'trim|required|xss_clean|addslashes');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|addslashes');
        if ($this->form_validation->run()) {
            $username = $this->security->xss_clean($this->input->post('username'));
            $password = $this->security->xss_clean($this->input->post('password'));
            $result = $this->Login_model->doLogin_model($username, $password);
            if ($result['loginaccess'] == 1) {
                $this->session->set_userdata($result);
                $table = 'user_logs';
                $log_data = array(
                    'user_id'  => $username,
                    'login_via'  => 'Username',
                    'ip_address'  => $this->server_ip,
                    'action_page'  => $this->page_name,
                    'remarks'  => 'Login Via Username'
                );
                $admin_activity = all_log_helper($table, $log_data); 
                $this->session->set_userdata('isLogin', true);
                return redirect(base_url('Home'));
            } else {
                $this->session->set_flashdata('error_msg', 'Wrong Credentials Provided');
                return redirect(base_url('Login/login'));
            }
            //$this->output->enable_profiler('true');
        } else {
            $this->session->set_flashdata('error_msg', 'Invalid Form Data Submitted');
            return redirect(base_url('Login/login'));
        }
    }


    public function signup(){
        $this->load->view('signup');
    }


    public function doSignup(){
        $this->form_validation->set_rules('name', 'User Name', 'trim|required|xss_clean|addslashes');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|xss_clean|addslashes');
        $this->form_validation->set_rules('age', 'Age', 'trim|required|xss_clean|addslashes');
        if ($this->form_validation->run()) {
            $data = $this->security->xss_clean($this->input->post());
            $check_if_exist=$this->Login_model->checkIfExist_model($data['email']);
            $additional_message = '';
            if($check_if_exist){
             $additional_message = 'This Email Existed From '.date('d-m-Y', strtotime($check_if_exist['created_at'])).' TO '.date('d-m-Y', strtotime($check_if_exist['deleted_at']));
            }

            $username = rand(111111,999999); // AUTO GENERATED USERNAME
            $password = rand(111111,999999); // AUTO GENERATED PASSWORD
        
            $data['username'] = $username;
            $data['password'] = MD5($password);
            $res = $this->Login_model->doSignup_model($data, $data['email']);
            if($res == 0){
                $this->session->set_flashdata('error_msg', 'This email id is already in used');
                return redirect(base_url('Login/login'));
            }
            $this->session->set_flashdata('error_msg', 'User Created With User Id '.$username.' and Password '.$password.' Please use login id and password for login. '.$additional_message);
            

            /*
            // UNCOMMENTS THESE IF YOU HAVE SET YOUR SMTP CONFIGURATION
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://mail.yourdomain.in',
                'smtp_port' => 465,
                'smtp_user' => 'youremailid', // change it to yours
                'smtp_pass' => '', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $this->email->initialize($config);
            $this->load->library('email');
            $this->email->from('hello@om.com', 'Your Name');
            $this->email->to('kumarom1203@gmail.com');
            $this->email->cc('ombitcse@gmail.com');
            $this->email->bcc('omcsebit@gmail.com');
            $this->email->subject('Login Credentials Recieved From Waycool');
            $this->email->message('User Created With User Id '.$username.' and Password '.$password.' Please use login id and password for login');
            $this->email->send();
            */

            return redirect(base_url('Login/login'));
        } else {
            $this->session->set_flashdata('error_msg', 'Invalid Form Data Submitted');
            return redirect(base_url('Login/signup'));
        }
    }


    public function logout(){
        $this->session->sess_destroy();
        return redirect(base_url());
    }

  
}