<?php
/**
 * Created by PhpStorm.
 * User: hafij
 * Date: 29/08/2019
 * Time: 1:10 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');


class Authenticate_model extends CI_Model
{
    //Parent Constructor
    public function __construct()
    {
        parent::__construct();
    }

    public function login_checker($email, $password)
    {
        $sql_parem = array('email' => $email, 'password' => $password);

        $this->db->select('email, full_name, user_name, profile_pic, profile_id, user_role, status');
        $this->db->from('tbl_users');
        $this->db->where($sql_parem);
        $query = $this->db->get();

        if($query->num_rows() == 0)
            return FALSE;

        else {
            $user = $query->result();
            return $user[0];
        }
    }
}
