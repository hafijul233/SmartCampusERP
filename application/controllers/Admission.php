<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 04/09/2019
 * Time: 1:43 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Admission extends CI_Controller
{

    //Parent Constructor
    public function __construct()
    {
        parent::__construct();
    }

    //Default Function
    public function index()
    {
        $this->applicant_list();
    }

    //Admit Student View
    public function admit_student()
    {
        $data = array(
            'type' => array('form'),
            'page_title' => 'Admit Student',
            'view_path' => 'admission/admit_student'
        );

        $this->form_validation->set_rules('email', 'Email Address', 'required|max_length[255]|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        $this->load->view('_layout/base_layout', $data);
    }

    //Ajaxem Email and user name validation
    public function user_email_validation()
    {
        $user_name = $this->input->get('user_name');
        $email_address = $this->input->get('email');

        //Email checking query
        $email_query = $this->db->get_where('tbl_users', array('email' => $email_address));

        //User_name checking query
        $user_name_query = $this->db->get_where('tbl_users', array('user_name' => $user_name));

        //Email Validation
        if($email_query->num_rows > 0) {
            $email_error = "This Email Address Already Existed. Try Different One.";
        } else {
            $email_error = FALSE;
        }

        //User Name Validation
        if($user_name_query->num_rows > 0) {
            $user_error = "This Username Already Existed. Try Different One.";
        } else {
            $user_error = FALSE;
        }

        $errors = (object) array(
            'user_name' => $user_error,
            'email_error' => $email_error
        );

        echo json_encode($errors);

    }


    public function applicant_list()
    {
        $data = array(
            'type' => array('table'),
            'page_title' => 'Applicant List',
            'view_path' => 'admission/applicant_list'
        );

        $this->load->view('_layout/base_layout', $data);
    }

    public function cancel_re_admission()
    {
        $data = array(
            'type' => array('form'),
            'page_title' => 'Cancel / Re-Admission',
            'view_path' => 'admission/cancel_re_admission'
        );

        $this->load->view('_layout/base_layout', $data);
    }

    public function student_transfer()
    {
        $data = array(
            'type' => array('form'),
            'page_title' => 'Student Transfer',
            'view_path' => 'admission/student_transfer'
        );

        $this->load->view('_layout/base_layout', $data);
    }


    public function admission_report()
    {
        $data = array(
            'type' => array('chart'),
            'page_title' => 'Admission Report',
            'view_path' => 'admission/admission_report'
        );

        $this->load->view('_layout/base_layout', $data);
    }

}
