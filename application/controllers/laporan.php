<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('sales_order_model');
    }

   public function index()
{
    $this->db->select('sales_order.*, sales.nama_sales, pelanggan.nama');
    $this->db->from('sales_order');
    $this->db->join(
        'sales',
        'sales.id_sales = sales_order.id_sales'
    );
    $this->db->join(
        'pelanggan',
        'pelanggan.id = sales_order.id_pelanggan'
    );

    $data['laporan'] =
    $this->db->get()->result();

    $data['total_order'] =
    $this->db->count_all('sales_order');

    $this->db->select_sum('total');
    $total = $this->db->get('sales_order')->row();

    $data['pendapatan'] =
    $total->total;

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/index',$data);
    $this->load->view('templates/footer');
}

public function cetak()
{
    $this->db->select('sales_order.*, sales.nama_sales, pelanggan.nama');
    $this->db->from('sales_order');
    $this->db->join(
        'sales',
        'sales.id_sales=sales_order.id_sales'
    );
    $this->db->join(
        'pelanggan',
        'pelanggan.id=sales_order.id_pelanggan'
    );

    $data['laporan'] =
    $this->db->get()->result();

    $this->load->view(
        'laporan/cetak',
        $data
    );
}
}