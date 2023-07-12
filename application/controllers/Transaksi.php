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
       
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/transaksi/v_tampil', $data);
        $this->load->view('template/footer');
    }

    public function Edit($id_transaksi) 
    {
      $where = ['id_transaksi' => $id_transaksi];
      $data = [
        'title' => 'Data Transaksi',
        'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>',
        'tampil' => $this->m_transaksi->edit($where)->result_array(),
        'petugas' => $this->db->get('tb_petugas')->result_array()
      ];

      $this->load->view('template/header', $data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/transaksi/v_edit', $data);
      $this->load->view('template/footer');

      if (isset($_POST['simpan'])) {

        $addData = [
          'id_transaksi' => $this->input->post('id_transaksi'),
          'id_petugas' => $this->input->post('id_petugas'),
          'id_order' => $this->input->post('id_order'),
          'jumlah' => $this->input->post('jumlah'),
          'harga' => $this->input->post('harga'),
          'metode_bayar' => $this->input->post('metode_bayar'),
          'tanggal' => $this->input->post('tanggal')
        ];

        $this->m_transaksi->editData($addData, $where);
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
    }

    public function cetak($id_order)
    {
      $where = $id_order;
      $data = [
        'tampil' => $this->db->query("SELECT tb_pelanggan.nama, tb_pelanggan.no_hp, tb_pelanggan.alamat, tb_product.deskripsi, tb_product.judul, tb_order.jumlah, tb_order.harga, tb_order.id_order, transaksi.id_transaksi FROM tb_product, tb_pelanggan, tb_order, transaksi WHERE tb_product.id_product=tb_order.id_product and tb_pelanggan.id_pelanggan=tb_order.id_pelanggan AND tb_order.id_order='$where'")->result_array() 
      ];

      $this->load->view('admin/transaksi/v_cetak', $data);
      // var_dump($data['tampil']);
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