<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Detail_order_model');

        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['detail'] =
        $this->Detail_order_model->get_all();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view(
            'detail_order/index',
            $data
        );
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['order'] =
        $this->db->get('sales_order')->result();

        $data['produk'] =
        $this->db->get('produk')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view(
            'detail_order/tambah',
            $data
        );
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $id_produk = $this->input->post('id_produk');
        $jumlah    = $this->input->post('jumlah');

        $produk = $this->db
        ->get_where(
            'produk',
            ['id'=>$id_produk]
        )->row();

        $subtotal =
        $produk->harga * $jumlah;

        $data = [
            'id_order' => $this->input->post('id_order'),
            'id_produk' => $id_produk,
            'jumlah' => $jumlah,
            'subtotal' => $subtotal
        ];

        $this->Detail_order_model->insert($data);

        redirect('detail_order');
    }

    public function edit($id)
    {
        $data['detail'] =
        $this->Detail_order_model->get_by_id($id);

        $data['order'] =
        $this->db->get('sales_order')->result();

        $data['produk'] =
        $this->db->get('produk')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view(
            'detail_order/edit',
            $data
        );
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $id_produk =
        $this->input->post('id_produk');

        $jumlah =
        $this->input->post('jumlah');

        $produk = $this->db
        ->get_where(
            'produk',
            ['id'=>$id_produk]
        )->row();

        $subtotal =
        $produk->harga * $jumlah;

        $data = [
            'id_order' => $this->input->post('id_order'),
            'id_produk' => $id_produk,
            'jumlah' => $jumlah,
            'subtotal' => $subtotal
        ];

        $this->Detail_order_model->update(
            $id,
            $data
        );

        redirect('detail_order');
    }

    public function hapus($id)
    {
        $this->Detail_order_model->delete($id);

        redirect('detail_order');
    }
}