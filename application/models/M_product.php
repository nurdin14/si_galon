<?php 

class M_product extends CI_Model {

    public function tampil()
    {
        return $this->db->get('tb_product');
    }

    public function addData($addData)
    {
        $this->db->insert('tb_product', $addData);
    }

    public function editProduct($where)
    {
        return $this->db->get_where('tb_product', $where);
    }

    public function ubahData($addData, $where)
    {
        $this->db->update('tb_product',$addData, $where);
    }

    public function hapusPetugas($where)
    {
        $this->db->delete('tb_petugas', $where);
    }
}