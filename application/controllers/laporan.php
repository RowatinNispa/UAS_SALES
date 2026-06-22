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
    $tanggal = $this->input->get('tanggal');

    $this->db->select('sales_order.*, sales.nama_sales, pelanggan.nama');
    $this->db->from('sales_order');
    $this->db->join('sales','sales.id_sales = sales_order.id_sales');
    $this->db->join('pelanggan','pelanggan.id = sales_order.id_pelanggan');

    //FILTER TANGGAL
    if($tanggal){
        $this->db->where('sales_order.tanggal', $tanggal);
    }

    $data['laporan'] = $this->db->get()->result();

    //TOTAL ORDER
    if($tanggal){
        $this->db->where('tanggal', $tanggal);
    }

    $data['total_order'] = $this->db->count_all_results('sales_order');

    //TOTAL PENDAPATAN
    $this->db->select_sum('total');

    if($tanggal){
        $this->db->where('tanggal', $tanggal);
    }

    $total = $this->db->get('sales_order')->row();

    $data['pendapatan'] = $total->total ?? 0;

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/index',$data);
    $this->load->view('templates/footer');
}

public function cetak()
{
    $tanggal = $this->input->get('tanggal');

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

    //FILTER TANGGAL UNTUK CETAK
    if($tanggal){
        $this->db->where('sales_order.tanggal', $tanggal);
    }

    $data['laporan'] =
    $this->db->get()->result();

    $this->load->view(
        'laporan/cetak',
        $data
    );
}

public function produk()
{
    $tanggal = $this->input->get('tanggal');

    $this->db->select('
        produk.nama_produk,
        SUM(detail_order.jumlah) as jumlah_terjual,
        SUM(detail_order.subtotal) as total_penjualan
    ');

    $this->db->from('detail_order');

    $this->db->join(
        'produk',
        'produk.id = detail_order.id_produk'
    );

    $this->db->join(
        'sales_order',
        'sales_order.id_order = detail_order.id_order'
    );

    if($tanggal){
        $this->db->where(
            'sales_order.tanggal',
            $tanggal
        );
    }

    $this->db->group_by('produk.id');

    $data['produk'] = $this->db->get()->result();

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('laporan/produk', $data);
    $this->load->view('templates/footer');
}

public function cetak_produk()
{
    $tanggal = $this->input->get('tanggal');

    $this->db->select('
        produk.nama_produk,
        SUM(detail_order.jumlah) as jumlah_terjual,
        SUM(detail_order.subtotal) as total_penjualan
    ');

    $this->db->from('detail_order');

    $this->db->join(
        'produk',
        'produk.id = detail_order.id_produk'
    );

    $this->db->join(
        'sales_order',
        'sales_order.id_order = detail_order.id_order'
    );

    if($tanggal){
        $this->db->where(
            'sales_order.tanggal',
            $tanggal
        );
    }

    $this->db->group_by('produk.id');

    $data['produk'] = $this->db->get()->result();

    $this->load->view(
        'laporan/cetak_produk',
        $data
    );
}
}