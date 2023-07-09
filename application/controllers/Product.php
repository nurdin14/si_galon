<?php 

class Product extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_product');
    }

    public function index()
    {
        $data = [
            'title' => 'Data Produk',
            'tampil' => $this->m_product->tampil()->result_array()
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/product/v_tampil', $data);
        $this->load->view('template/footer');
    }

    public function add()
    {
        $data = [
            'title' => 'Form Tambah',
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/product/v_add', $data);
        $this->load->view('template/footer');

        if(isset($_POST['simpan'])) {

              //upload gambar
              // $config['upload_path'] = './assets/img/product';
              // $config['allowed_types'] = 'jpg|png|jpeg|gif';
              // $config['max_size'] = '2048';  //2MB max
              // $config['max_width'] = '4480'; // pixel
              // $config['max_height'] = '4480'; // pixel
              // $config['file_name'] = $_FILES['foto']['name'];

              // $this->load->library('upload', $config);

              // if (!empty($config['file_name'])) {
              //   if ($this->upload->do_upload('foto')) {
              //     $foto = $this->upload->data();
              //     $f = $foto['file_name'];
              //   }
              // } 
              // else {
              //   $f = $this->input->post('foto_old');
              // }

            $addData = [
                'id_product' => $this->input->post('id_product'),
                'kode' => $this->input->post('kode'),
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga'),
                'gl' => $this->input->post('gl'),
                'air' => $this->input->post('air'),
                'tutup' => $this->input->post('tutup'),
                'pembersih' => $this->input->post('pembersih'),
                'harga_air' => $this->input->post('harga_air'),
                'harga_tutup' => $this->input->post('harga_tutup'),
                'harga_pembersih' => $this->input->post('harga_pembersih'),
                'harga_galon' => $this->input->post('harga_galon'),
            ];

            $this->m_product->addData($addData);
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
            redirect('product/index');
        }
    }

    public function ubah($id_product)
    {
        $where = ['id_product' => $id_product];
        $data = [
            'title' => 'Form Ubah',
            'tampil' => $this->m_product->editProduct($where)->result_array(),
            'icon' => '<i class="fas fa-user-edit" style="font-size: 30pt;"></i>'
        ];

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('admin/product/v_edit', $data);
        $this->load->view('template/footer');

        if (isset($_POST['simpan'])) {

          //upload gambar
          // $config['upload_path'] = './assets/img/product';
          // $config['allowed_types'] = 'jpg|png|jpeg|gif';
          // $config['max_size'] = '2048';  //2MB max
          // $config['max_width'] = '4480'; // pixel
          // $config['max_height'] = '4480'; // pixel
          // $config['file_name'] = $_FILES['foto']['name'];

          // $this->load->library('upload', $config);

          // if (!empty($config['file_name'])) {
          //   if ($this->upload->do_upload('foto')) {
          //     $foto = $this->upload->data();
          //     $f = $foto['file_name'];
          //   }
          // }else {
          //   $f = $this->input->post('foto_old');
          // }

          $addData = [
          'id_product' => $this->input->post('id_product'),
          'kode' => $this->input->post('kode'),
          'judul' => $this->input->post('judul'),
          'deskripsi' => $this->input->post('deskripsi'),
          'harga' => $this->input->post('harga'),
          'gl' => $this->input->post('gl'),
          'air' => $this->input->post('air'),
          'tutup' => $this->input->post('tutup'),
          'pembersih' => $this->input->post('pembersih'),
          'harga_air' => $this->input->post('harga_air'),
          'harga_tutup' => $this->input->post('harga_tutup'),
          'harga_pembersih' => $this->input->post('harga_pembersih'),
          'harga_galon' => $this->input->post('harga_galon'),
          ];

            $this->m_product->ubahData($addData, $where);
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
            redirect('product/index');
        }
    }

    public function hapus($id_product)
    {
      $where = ['id_product' => $id_product];
      $_id = $this->db->get_where('tb_product', $where)->row();
      $query = $this->db->delete('tb_product', $where);
      if ($query) {
        unlink("assets/img/product/" . $_id->foto);
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
                    </div>');
      }
        redirect('product/index');
    }

    public function cetak()
    {
      $data = [
        'tampil' => $this->m_product->tampil()->result_array() 
      ];

      $this->load->view('admin/product/v_cetak', $data);
    }
}