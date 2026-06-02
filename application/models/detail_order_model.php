<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_order_model extends CI_Model {

    private $table = 'detail_order';

    public function get_all()
    {
        $this->db->select('detail_order.*, produk.nama_produk');
        $this->db->from('detail_order');
        $this->db->join(
            'produk',
            'produk.id = detail_order.id_produk'
        );

        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where(
            $this->table,
            ['id_detail'=>$id]
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
            'id_detail',
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
            ['id_detail'=>$id]
        );
    }
}