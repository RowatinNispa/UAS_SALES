<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('pelanggan_model');

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['pelanggan'] = $this->pelanggan_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = array(
            'id'     => $this->input->post('id'),
            'nama'     => $this->input->post('nama'),
            'alamat'   => $this->input->post('alamat'),
            'no_telp'  => $this->input->post('no_telp')
        );

        $this->pelanggan_model->insert($data);

        redirect('pelanggan');
    }

    public function edit($id)
    {
        $data['pelanggan'] = $this->pelanggan_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('pelanggan/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = array(
            'nama'     => $this->input->post('nama'),
            'alamat'   => $this->input->post('alamat'),
            'no_telp'  => $this->input->post('no_telp')
        );

        $this->pelanggan_model->update($id, $data);

        redirect('pelanggan');
    }

    public function hapus($id)
    {
        $this->pelanggan_model->delete($id);

        redirect('pelanggan');
    }
}