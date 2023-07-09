<?php 

class M_pelanggan extends CI_Model {

    public function tampilPelanggan()
    {
        return $this->db->get('tb_pelanggan');
    }

    public function addData($addData)
    {
        $this->db->insert('tb_pelanggan', $addData);
    }

    public function editPelanggan($where)
    {
        return $this->db->get_where('tb_pelanggan', $where);
    }

    public function ubahData($addData, $where)
    {
        $this->db->update('tb_pelanggan',$addData, $where);
    }

    public function hapusPelanggan($where)
    {
        $this->db->delete('tb_pelanggan', $where);
    }
}