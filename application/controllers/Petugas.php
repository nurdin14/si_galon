<?php 

class Petugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_petugas');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Petugas',
            'tampil' => $this->m_petugas->tampilPetugas()->result_array()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/petugas/v_tampil', $data);
        $this->load->view('template/footer');
    }

    public function addPetugas()
    {
        $data = [
            'title' => 'Form Tambah',
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/petugas/v_add', $data);
        $this->load->view('template/footer');

        if(isset($_POST['simpan'])) {

            $addData = [
                'id_petugas' => $this->input->post('id_petugas'),
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'level' => $this->input->post('level'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];

            $this->m_petugas->addData($addData);
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
            redirect('petugas/index');
        }
    }

    public function ubahPetugas($id_petugas)
    {
        $where = ['id_petugas' => $id_petugas];
        $data = [
            'title' => 'Form Ubah',
            'tampil' => $this->m_petugas->editPetugas($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/petugas/v_edit', $data);
        $this->load->view('template/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
              'id_petugas' => $this->input->post('id_petugas'),
              'nama' => $this->input->post('nama'),
              'umur' => $this->input->post('umur'),
              'no_hp' => $this->input->post('no_hp'),
              'alamat' => $this->input->post('alamat'),
              'level' => $this->input->post('level'),
              'username' => $this->input->post('username'),
              'password' => $this->input->post('password'),
            ];

            $this->m_petugas->ubahData($addData, $where);
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
            redirect('petugas/index');
        }
    }

    public function hapusPetugas($id_petugas)
    {
        $where = ['id_petugas' => $id_petugas];
        $this->m_petugas->hapusPetugas($where);
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
        redirect('petugas/index');
    }

    public function cetakPetugas()
    {
      $data = [
        'tampil' => $this->m_petugas->tampilPetugas()->result_array() 
      ];

      $this->load->view('admin/petugas/v_cetak', $data);
    }
}