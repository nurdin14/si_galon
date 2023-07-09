<?php

class M_order extends CI_Model {

    public function tampilOrder()
    {
        return $this->db->get('tb_product');
    }

    public function beliPelanggan($where)
    {
        return $this->db->get_where('tb_product', $where);
    }

    public function Po($tambahData) 
    {
        $this->db->insert('tb_order', $tambahData);
    }
}