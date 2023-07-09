<?php 

class M_transaksi extends CI_Model {

    public function tampil()
    {
        return $this->db->get('tb_transaksi');
    }

    public function addData($addData)
    {
        $this->db->insert('tb_transaksi', $addData);
    }

    public function tampilPembayaran($where)
    {
        return $this->db->get_where('tb_transaksi', $where);
    }

    public function truncatePembayaran()
    {
        $this->db->query("TRUNCATE TABLE tb_transaksi");
    }

    public function tampilStruk($where)
    {
        return $this->db->get_where('struk_pembayaran', $where);
    }
}