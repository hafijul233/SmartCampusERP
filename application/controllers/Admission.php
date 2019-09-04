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

    public function admit_student()
    {
        $data = array(
            'type' => array('form'),
            'page_title' => 'Admit Student',
            'view_path' => 'admission/admit_student'
        );

        $this->load->view('_layout/base_layout', $data);
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
