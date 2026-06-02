<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales_order_model extends CI_Model {

    private $table = 'sales_order';

    public function get_all()
    {
        $this->db->select('sales_order.*, sales.nama_sales, pelanggan.nama');
        $this->db->from('sales_order');
        $this->db->join('sales','sales.id_sales=sales_order.id_sales');
        $this->db->join('pelanggan','pelanggan.id=sales_order.id_pelanggan');

        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where(
            $this->table,
            ['id_order'=>$id]
        )->row();
    }

    public function insert($data)
    {
        return $this->db->insert(
            $this->table,
            $data
        );
    }

    public function update($id,$data)
    {
        $this->db->where(
            'id_order',
            $id
        );

        return $this->db->update(
            $this->table,
            $data
        );
    }

    public function delete($id)
    {
        return $this->db->delete(
            $this->table,
            ['id_order'=>$id]
        );
    }
}