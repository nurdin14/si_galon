<?php 

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "Login") {
            redirect('login/index');
        }
        $this->load->model('m_admin');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'countPelanggan' => $this->m_admin->countPelanggan()->result_array(),
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
}