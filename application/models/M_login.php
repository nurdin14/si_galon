<?php

class M_login extends CI_Model {

    public function authLogin($data)
    {
        return $this->db->get_where('tb_petugas', $data);
    }

    public function lupaPassword($username)
    {
        return $this->db->query("select * from tb_petugas where username = '$username'");
    }

    public function addRegister($data)
    {
        $this->db->insert('tb_petugas', $data);
    }
}