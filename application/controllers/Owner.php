<?php

class Owner extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "Login") {
            redirect('login/index');
        }
        $this->load->model('m_owner');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'countPelanggan' => $this->m_owner->countPelanggan()->result_array(),
            'countPetugas' => $this->m_owner->countPetugas()->result_array(),
            'countBarang' => $this->m_owner->countBarang()->result_array(),
            'sumTransaksi' => $this->m_owner->sumTransaksi()->result_array(),
        ];

        $this->load->view('template/header-owner', $data);
        $this->load->view('template/sidebar-owner');
        $this->load->view('owner/index', $data);
        $this->load->view('template/footer-owner');
    }

    public function laporan_stok()
    {
        $data = [
            'title' => 'Laporan Stok Barang',
            'tampil' => $this->m_owner->laporanStok()->result_array()
        ];

        $this->load->view('template/header-owner', $data);
        $this->load->view('template/sidebar-owner');
        $this->load->view('owner/laporan_stok/v_tampil', $data);
        $this->load->view('template/footer-owner');
    }

    public function cetakStok()
    {
        $data = [
            'tampil' => $this->m_owner->laporanStok()->result_array()
        ];
        $this->load->view('owner/laporan_stok/v_cetak', $data);
    }

    public function laporan_jual()
    {
        $data = [
            'title' => 'Laporan Penjualan',
            'total_p' => $this->m_owner->sumTotal()->result_array(),
            'tampil' => $this->m_owner->laporanJual()->result_array()
        ];

        $this->load->view('template/header-owner', $data);
        $this->load->view('template/sidebar-owner');
        $this->load->view('owner/laporan_jual/v_tampil', $data);
        $this->load->view('template/footer-owner');
    }

    public function cetakJual()
    {
        $data = [
            'total' => $this->m_owner->sumTotal()->result_array(),
            'tampil' => $this->m_owner->laporanJual()->result_array()
        ];
        $this->load->view('owner/laporan_jual/v_cetak', $data);
    }
}
