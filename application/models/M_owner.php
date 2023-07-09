<?php

class M_owner extends CI_Model
{

    public function countPelanggan()
    {
        return $this->db->query("SELECT COUNT(nama) as total_pelanggan from tb_pelanggan");
    }

    public function countPetugas()
    {
        return $this->db->query("SELECT COUNT(nama) as total_petugas from tb_petugas");
    
    }
    public function countBarang()
    {
        return $this->db->query("SELECT COUNT(judul) as total_barang from tb_product");
    }

    public function sumTransaksi()
    {
        return $this->db->query("SELECT sum(harga) as total from tb_transaksi");
    }

    public function laporanStok()
    {
        return $this->db->get('tb_product');
    }

    public function laporanJual()
    {
        return $this->db->get('struk_pembayaran');
    }

    public function sumTotal()
    {
        return $this->db->query("SELECT sum(harga*jumlah) as total from struk_pembayaran");
    }
}
