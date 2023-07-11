<?php
    class Pesanan extends CI_Controller {
        public function index()
        {
        $data = [
            'title' => 'Data Pesanan',
            'tampil' => $this->db->get('tb_order')->result_array()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/pesanan/v_tampil', $data);
        $this->load->view('template/footer');
        }
    }
?>