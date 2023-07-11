<?php 
class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('status_login') != "Login") {
            redirect('login_user/index');
        }
        $this->load->model('m_order');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard User',
        ];

        $this->load->view('template/header-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('user/index', $data);
        $this->load->view('template/footer-user');
    }

    public function order()
    {
        $data = [
            'title' => 'Katalog',
            'dataOrder' => $this->m_order->tampilOrder()->result_array()
        ];

        $this->load->view('template/header-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('user/order/index', $data);
        $this->load->view('template/footer-user');
    }

    public function beli($id_product)
    {
        $where = ['id_product' => $id_product];
        $pelanggan = $this->session->userdata('nama');
        $data = [
            'title' => 'Katalog',
            'beliPelanggan' => $this->m_order->beliPelanggan($where)->result_array(),
            'ambilPelanggan' => $this->db->query("select * from tb_pelanggan where nama ='$pelanggan'")->result_array()
        ];

        $this->load->view('template/header-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('user/order/v_beli', $data);
        $this->load->view('template/footer-user');

        if(isset($_POST['simpan'])) {
            $tambahData = [
                'id_order' => $this->input->post('id_order'),
                'id_product' => $this->input->post('id_product'),
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'jumlah' => $this->input->post('jumlah'),
                'harga' => $this->input->post('harga'),
                'status' => "Dipesan"
            ];

            $this->m_order->Po($tambahData);
            $this->session->set_flashdata('pesan', '
                <div class="alert alert-success alert-has-icon alert-dismissible show fade">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                          <span>&times;</span>
                        </button>
                        <div class="alert-title">Berhasil</div>
                        Pemesanan Berhasil, Silahkan Lanjutkan Pembayaran.
                      </div>
                    </div>
            ');
            redirect('user/keranjang');
            
        }
    }

    public function keranjang()
    {
        $pelanggan = $this->session->userdata('id_pelanggan');
        $data = [
            'title' => 'Keranjang Belanja',
            'keranjang' => $this->db->query("select * from tb_order where id_pelanggan ='$pelanggan'")->result_array()
        ];

        $this->load->view('template/header-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('user/order/v_keranjang', $data);
        $this->load->view('template/footer-user');
    }

    //ubah frofil
    public function ubahProfil()
    {
        $pelanggan = $this->session->userdata('id_pelanggan');
        $data = [
            'title' => 'Ubah Profil',
            'profil' => $this->db->query("select * from tb_pelanggan where id_pelanggan ='$pelanggan'")->result_array()
        ];

        $this->load->view('template/header-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('user/v_edit', $data);
        $this->load->view('template/footer-user');

        if (isset($_POST['simpan'])) {

            $addData = [
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];

            $where = ['id_pelanggan' => $addData['id_pelanggan']];

            $this->db->update('tb_pelanggan', $addData, $where);
            
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
            redirect('user/index');
        }
    }

    public function checkout($id_order)
    {
        $where = ['id_order' => $id_order];
        $pelanggan = $this->session->userdata('nama');
        $data = [
            'title' => 'Checkout',
            'Checkout' => $this->db->get_where('tb_order', $where)->result_array(),
            'Biodata' => $this->db->query("SELECT tb_pelanggan.nama, tb_pelanggan.no_hp, tb_pelanggan.alamat, tb_product.deskripsi, tb_product.judul, tb_order.id_order  FROM tb_product, tb_pelanggan, tb_order WHERE tb_product.id_product=tb_order.id_product and tb_pelanggan.id_pelanggan=tb_order.id_pelanggan and tb_pelanggan.nama='$pelanggan'")->result_array(),
        ];

        $this->load->view('template/header-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('user/order/v_bayar', $data);
        $this->load->view('template/footer-user');
        
    }

    public function prosesCekout()
    {
        if (isset($_POST['simpan'])) {
            $add = [
                'id_transaksi' => $this->input->post('id_transaksi'),
                'id_petugas' => $this->input->post('id_petugas'),
                'id_order' => $this->input->post('id_order'),
                'jumlah' => $this->input->post('jumlah'),
                'harga' => $this->input->post('harga'),
                'metode_bayar' => $this->input->post('metode_bayar'),
                'tanggal' => $this->input->post('tanggal')
            ];

            $this->db->insert('transaksi', $add);
            redirect('user/keranjang');
        }
    }
}