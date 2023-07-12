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

        public function Edit($id_pelanggan) 
        {
            $where = ['id_pelanggan' => $id_pelanggan];
            $data = [
                'title' => 'Edit Pesanan',
                'Edit' => $this->db->get_where('tb_order', $where)->result_array(),
                'tampil' => $this->db->query("SELECT tb_pelanggan.nama, tb_pelanggan.no_hp, tb_pelanggan.alamat, tb_product.deskripsi, tb_product.judul, tb_order.id_order  FROM tb_product, tb_pelanggan, tb_order WHERE tb_product.id_product=tb_order.id_product and tb_pelanggan.id_pelanggan=tb_order.id_pelanggan and tb_pelanggan.id_pelanggan = '$id_pelanggan'")->result_array()
            ];

            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('admin/pesanan/v_edit', $data);
            $this->load->view('template/footer');
            
            if(isset($_POST['simpan'])) {
                $tambahData = [
                    'id_order' => $this->input->post('id_order'),
                    'id_product' => $this->input->post('id_product'),
                    'id_pelanggan' => $this->input->post('id_pelanggan'),
                    'jumlah' => $this->input->post('jumlah'),
                    'harga' => $this->input->post('harga'),
                ];

                $this->db->update('tb_order', $tambahData, $where);
                $this->session->set_flashdata('pesan', '
                    <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                            <span>&times;</span>
                            </button>
                            <div class="alert-title">Berhasil</div>
                           Data Berhasil Diubah.
                        </div>
                        </div>
                ');
                redirect('pesanan/index');
            }
        }
    }
?>