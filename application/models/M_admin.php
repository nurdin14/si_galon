<?php

class M_admin extends CI_Model {

    public function countPelanggan()
    {
        return $this->db->query("SELECT COUNT(nama) as total_pelanggan from tb_pelanggan");
    }
}