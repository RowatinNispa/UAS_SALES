<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Auth_model');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('auth/login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Auth_model->cek_login(
            $username,
            $password
        );

        if($user){

            $data = array(
                'id_user'  => $user->id,
                'username' => $user->username,
                'role'     => $user->role,
                'login'    => true
            );

            $this->session->set_userdata($data);

            redirect('dashboard');

        }else{

            $this->session->set_flashdata(
                'error',
                'Username atau Password salah'
            );

            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('auth');
    }
}