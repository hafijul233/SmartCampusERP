<?php
/**
 * Created by PhpStorm.
 * Project SmartCampusERP
 * User: hafij
 * Date: 04/09/2019
 * Time: 12:34 AM
 * Description:
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
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

    public function profile()
    {
        
    }

}
