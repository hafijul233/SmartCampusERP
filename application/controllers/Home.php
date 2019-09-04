<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 03/09/2019
 * Time: 10:52 PM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{

    //Parent Constructor
    public function __construct()
    {
        parent::__construct();
    }

    //Default Function
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function dashboard()
    {
        $data = array(
            'type' =>array('form'),
            'page_title' => 'Dashboard',
            'view_path' => 'home/dashboard'
        );

        $this->load->view('_layout/base_layout',$data);

    }


}
