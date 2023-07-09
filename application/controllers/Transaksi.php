<?php 

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_transaksi');
        $this->load->model('m_pelanggan');
        $this->load->model('m_product');
        $this->load->model('m_petugas');
    }

    public function index()
    {
        $data = [
          'title' => 'Data Transaksi',
          'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>',
          'tampil' => $this->m_transaksi->tampil()->result_array(),
          'pelanggan' => $this->m_pelanggan->tampilPelanggan()->result_array(),
          'petugas' => $this->m_petugas->tampilPetugas()->result_array(),
          'product' => $this->m_product->tampil()->result_array(),
        ];

        if (isset($_POST['simpan'])) {

          $addData = [
            'id_transaksi' => $this->input->post('id_transaksi'),
            'id_product' => $this->input->post('id_product'),
            'id_petugas' => $this->input->post('id_petugas'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'jumlah' => $this->input->post('jumlah'),
            'harga' => $this->input->post('harga'),
            'tanggal' => $this->input->post('tanggal')
          ];

          $this->m_transaksi->addData($addData);
          $this->session->set_flashdata('pesan', '
                    <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                          <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                            <div class="alert-title">Berhasil</div>
                            Data Berhasil Di Simpan.
                          </div>
                        </div>
                ');
          redirect('transaksi/index');
        }
       
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/transaksi/v_tampil', $data);
        $this->load->view('template/footer');
    }

    public function cetak($id_transaksi)
    {
      $where = ['id_transaksi' => $id_transaksi];

      $data = [
        'tampil' => $this->m_transaksi->tampilStruk($where)->result_array() 
      ];

      $this->load->view('admin/transaksi/v_cetak', $data);
    }

    public function truncate()
    {
      $this->m_transaksi->truncatePembayaran();
      $this->session->set_flashdata('pesan', '
                      <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                            <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                            <div class="alert-body">
                              <button class="close" data-dismiss="alert">
                                <span>&times;</span>
                              </button>
                              <div class="alert-title">Berhasil</div>
                              Data Berhasil Di Kosongkan.
                            </div>
                          </div>
                  ');
      redirect('transaksi/index');
    }
}