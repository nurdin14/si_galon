<?php

class Penghasilan extends CI_Controller {

    public function index()
    {
        $data = [
            'title' => 'Rekap Penghasilan',
            'tampil' => $this->db->get('tb_penghasilan')->result_array(),
            'pendapatan' => $this->db->query("SELECT sum(tb_penghasilan.pemasukan) - SUM(tb_penghasilan.pengeluaran) as jumlah_pendapatan FROM tb_penghasilan")->result_array()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/penghasilan/v_tampil', $data);
        $this->load->view('template/footer');
    }
    public function cetakPenghasilan()
    {
        $data = [
            'title' => 'Cetak Rekap Penghasilan',
            'tampil' => $this->db->get('tb_penghasilan')->result_array(),
            'pendapatan' => $this->db->query("SELECT sum(tb_penghasilan.pemasukan) - SUM(tb_penghasilan.pengeluaran) as jumlah_pendapatan FROM tb_penghasilan")->result_array()
        ];

        $this->load->view('admin/penghasilan/v_cetak', $data);
    }

    public function addPenghasilan() 
    {
        $data = [
            'title' => 'Rekap Penghasilan',
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/penghasilan/v_add', $data);
        $this->load->view('template/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_penghasilan' => $this->input->post('id_penghasilan'),
                'tanggal' => $this->input->post('tanggal'),
                'pemasukan' => $this->input->post('pemasukan'),
                'pengeluaran' => $this->input->post('pengeluaran')
            ];

            $this->db->insert('tb_penghasilan', $addData);
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
            redirect('penghasilan/index');
        }
    }

    public function ubahPenghasilan($id_penghasilan)
    {
        $id = ['id_penghasilan' => $id_penghasilan];
        $data = [
            'title' => 'Rekap Penghasilan',
            'tampil' => $this->db->get_where('tb_penghasilan', $id)->result_array()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/penghasilan/v_edit', $data);
        $this->load->view('template/footer');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_penghasilan' => $this->input->post('id_penghasilan'),
                'tanggal' => $this->input->post('tanggal'),
                'pemasukan' => $this->input->post('pemasukan'),
                'pengeluaran' => $this->input->post('pengeluaran')
            ];

            $this->db->update('tb_penghasilan', $addData, $id);
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
            redirect('penghasilan/index');
        }
    }

    public function hapusPenghasilan($id_penghasilan)
    {
        $id = ['id_penghasilan' => $id_penghasilan];

        $this->db->delete('tb_penghasilan', $id);
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
        redirect('penghasilan/index');
    }
}