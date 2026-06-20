<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Produk_model');

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['produk'] = $this->Produk_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'kode'        => $this->input->post('kode'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga'       => $this->input->post('harga'),
            'stok'        => $this->input->post('stok')

        ];

        $this->Produk_model->insert($data);

        redirect('produk');
    }

    public function edit($id)
    {
        $data['produk'] = $this->Produk_model->get_by_id($id);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('produk/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'kode'        => $this->input->post('kode'),
            'nama_produk' => $this->input->post('nama_produk'),
            'harga'       => $this->input->post('harga'),
            'stok'        => $this->input->post('stok')
        ];

        $this->Produk_model->update($id,$data);

        redirect('produk');
    }

    public function hapus($id)
    {
        $this->Produk_model->delete($id);

        redirect('produk');
    }
}