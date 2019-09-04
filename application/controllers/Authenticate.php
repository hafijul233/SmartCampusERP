<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 02/09/2019
 * Time: 11:37 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Authenticate extends CI_Controller
{

    //Parent Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Authenticate_model');
    }

    //Default Function
    public function index()
    {
        $this->login();
    }

    //Login Page View
    public function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = array(
            'page_title' => 'Login'
        );

        //Form Rules
        $this->form_validation->set_rules('email', 'Email Address', 'required|max_length[255]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            //Login Process & Error Msg
            $user_info = $this->login_process($email, $password);

            // if there is a error
            if (is_string($user_info)) {
                //display on alert box
                $_SESSION['msg'] = $user_info;
                //error type
                if($user_info == 'User Not Found.')
                    $_SESSION['error_type'] = 'danger';
                else
                    $_SESSION['error_type'] = 'warning';

            } else {
                $this->session->set_userdata($user_info);
                redirect(base_url() . 'home/dashboard');
            }
        }

        $this->load->view('authenticate/login', $data);
    }

    //Login Process
    protected function login_process($email, $password)
    {
        $this->load->helper('security');

        $email = $this->security->xss_clean($email);
        $password = $this->security->xss_clean($password);

        if (empty($email) || empty($password))
            return 'Invalid Email or Password';

        else {
            //Password Encryption
            $password = md5($password);

            $response = $this->Authenticate_model->login_checker($email, $password);

            //DB Query feed back
            if ($response == FALSE) {
                return 'User Not Found.';

            } elseif ($response->status == 0) {
                return 'User Account is Suspended.';
            } else {
                return (array)$response;
            }
        }
    }

    //Register Page View from Setting Option
    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        $this->load->view('authenticate/register');
    }

    //Login Process
    protected function register_process($user_info = array())
    {

    }

    //Account Activation Page View
    public function activation()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = array(
            'page_title' => 'Account Activation'
        );

        $this->load->view('authenticate/activation', $data);
    }

    //Password Recovery Page View
    public function recovery()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = array(
            'page_title' => 'Password Recovery'
        );

        $this->load->view('authenticate/recovery', $data);
    }

    //Session Lock View
    public function lockscreen($current_url = NULL)
    {
        //$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = array(
            'page_title' => 'Lock Screen'
        );
        //Form Rules
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        if ($this->form_validation->run()) {
            $email = $this->session->email;
            $password = $this->input->post('password');

            //Login Process & Error Msg
            $user_info = $this->login_process($email, $password);

            // if there is a error
            if (is_string($user_info)) {
                $data['msg'] = $user_info;
            } else {
                $this->session->set_userdata($user_info);
                redirect($current_url);
            }
        }

        $this->load->view('authenticate/lockscreen', $data);
    }

    //System Logout View / process
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'authenticate/login');
    }


}
