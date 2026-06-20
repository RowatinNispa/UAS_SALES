<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function cek_login($username, $password, $role)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $this->db->where('role', $role);

        return $this->db->get('users')->row();
    }
}