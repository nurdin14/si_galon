<?php 

class M_transaksi extends CI_Model {

    public function tampil()
    {
        return $this->db->get('transaksi');
    }

    public function editData($addData, $where)
    {
        $this->db->update('transaksi', $addData, $where);
    }

    public function edit($where)
    {
        return $this->db->get_where('transaksi', $where);
    }

    // public function tampilPembayaran($where)
    // {
    //     return $this->db->query("");
    // }

    public function truncatePembayaran()
    {
        $this->db->query("TRUNCATE TABLE transaksi");
    }

    // public function tampilStruk($where)
    // {
    //     return $this->db->get_where('struk_pembayaran', $where);
    // }
}