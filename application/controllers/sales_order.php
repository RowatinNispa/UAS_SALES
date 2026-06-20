<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_order extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Sales_order_model');
        if(!$this->session->userdata('login')){
            redirect('auth');
        }
    }

   public function index()
{
    $data['order'] = $this->Sales_order_model->get_all();

    $data['draft'] =
    $this->db
    ->where('status','draft')
    ->count_all_results('sales_order');

    $data['selesai'] =
    $this->db
    ->where('status','selesai')
    ->count_all_results('sales_order');

    $data['batal'] =
    $this->db
    ->where('status','batal')
    ->count_all_results('sales_order');

    $this->db->select_sum('total');
    $omzet = $this->db->get('sales_order')->row();

    $data['omzet'] = $omzet->total;

    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('templates/topbar');
    $this->load->view('sales_order/index',$data);
    $this->load->view('templates/footer');
}

    public function tambah()
    {
        $data['sales'] = $this->db->get('sales')->result();
        $data['pelanggan'] = $this->db->get('pelanggan')->result();
        $data['id'] = $this->db->get('id_produk')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sales_order/tambah',$data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $data = [
            'id_sales'     => $this->input->post('id_sales'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'id'           => $this->input->post('id_produk'),
            'tanggal'      => $this->input->post('tanggal'),
            'total'        => $this->input->post('total'),
            'status'       => strtolower($this->input->post('status'))
        ];

        $this->Sales_order_model->insert($data);
        redirect('sales_order');
    }

    public function edit($id)
    {
        $data['sales_order'] = $this->Sales_order_model->get_by_id($id);
        $data['sales'] = $this->db->get('sales')->result();
        $data['pelanggan'] = $this->db->get('pelanggan')->result();
        $data['id'] = $this->db->get('id_produk')->result();


        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('sales_order/edit',$data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $data = [
            'id_sales'     => $this->input->post('id_sales'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'id'           => $this->input->post('id_produk'),
            'tanggal'      => $this->input->post('tanggal'),
            'total'        => $this->input->post('total'),
            'status'       => strtolower($this->input->post('status'))
        ];

        $this->Sales_order_model->update($id,$data);

        redirect('sales_order');
    }

    public function hapus($id)
    {
        $this->Sales_order_model->delete($id);

        redirect('sales_order');
    }
}