<?php

class M_login_user extends CI_Model {

    public function authLogin($data)
    {
        return $this->db->get_where('tb_pelanggan', $data);
    }

    public function lupaPassword($username)
    {
        return $this->db->query("select * from tb_pelanggan where username = '$username'");
    }

    public function addRegister($data)
    {
        $this->db->insert('tb_pelanggan', $data);
    }
}