<?php 

class Pelanggan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Pelanggan',
            'tampil' => $this->m_pelanggan->tampilPelanggan()->result_array()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/pelanggan/v_pelanggan', $data);
        $this->load->view('template/footer');
    }

    public function addPelanggan()
    {
        $data = [
            'title' => 'Form Tambah',
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/pelanggan/v_add', $data);
        $this->load->view('template/footer');

        if(isset($_POST['simpan'])) {

            $addData = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
            ];

            $this->m_pelanggan->addData($addData);
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
            redirect('pelanggan/index');
        }
    }

    public function ubahPelanggan($id_pelanggan)
    {
        $where = ['id_pelanggan' => $id_pelanggan];
        $data = [
            'title' => 'Form Ubah',
            'tampil' => $this->m_pelanggan->editPelanggan($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/pelanggan/v_edit', $data);
        $this->load->view('template/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
            ];

            $this->m_pelanggan->ubahData($addData, $where);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Ubah.
                      </div>
                    </div>
            ');
            redirect('pelanggan/index');
        }
    }

    public function hapusPelanggan($id_pelanggan)
    {
        $where = ['id_pelanggan' => $id_pelanggan];
        $this->m_pelanggan->hapusPelanggan($where);
        $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Data Berhasil Di Hapus.
                      </div>
                    </div>
            ');
        redirect('pelanggan/index');
    }

    public function cetakPelanggan()
    {
      $data = [
        'tampil' => $this->m_pelanggan->tampilPelanggan()->result_array() 
      ];

      $this->load->view('admin/pelanggan/v_cetak', $data);
    }
}