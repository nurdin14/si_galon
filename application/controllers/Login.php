<?php 

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function index()
    {
        $data = [
            'title' => 'Login'
        ];

        $this->load->view('template/header-login', $data);
        $this->load->view('login/index');
        $this->load->view('template/footer-login');
    }

    public function authLogin()
    {
        if (isset($_POST['login'])) {

            $data = [
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];

            $cek = $this->m_login->authLogin($data);

            if ($cek->num_rows() > 0) {
                $c = $cek->row_array();
                if($c['level']=='Admin') {
                    $dataLogin = [
                        'nama_petugas' => $data['username'],
                        'status_login' => 'Login'
                    ];

                    $this->session->set_userdata($dataLogin);
                    redirect('petugas/index');
                } else if($c['level'] == 'Owner'){
                    $dataLogin = [
                        'nama_owner' => $data['username'],
                        'status_login' => 'Login'
                    ];

                    $this->session->set_userdata($dataLogin);
                    redirect('owner/index');
                }
            } else {
                $this->session->set_flashdata('pesan',
                    '
                <div class="alert alert-danger alert-dismissible show fade">
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                              Username dan Password tidak terdaftar
                          </div>
                        </div>
                '
                );
                redirect('login/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }

    public function lupaPassword()
    {
        $data = [
            'title' => 'Lupa Password'
        ];

        $this->load->view('template/header-login', $data);
        $this->load->view('login/lupa_password');
        $this->load->view('template/footer-login');

        if (isset($_POST['simpan'])) {

            $username = $this->input->post('username');
            $cek      = $this->m_login->lupaPassword($username)->num_rows();

            if ($cek > 0) {
                $tampil = $this->m_login->lupaPassword($username)->result_array();
                foreach ($tampil as $t) :
                    $p = $t['password'];
                    echo '<div class="alert alert-danger alert-dismissible show fade">
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                            Password Anda : ' . $p . ' / 
                            <a href="' . site_url('login/index') . '">Login </a>
                          </div>
                        </div>';
                endforeach;
            } else {
                echo '<div class="alert alert-danger alert-dismissible show fade">
                          <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                              <span>&times;</span>
                            </button>
                            Password tidak ditemukan
                          </div>
                        </div>';
            }
        }
    }

    public function register()
    {
        $data = [
            'title' => 'Buat Akun',
        ];

        $this->load->view('template/header-login', $data);
        $this->load->view('login/regis');
        $this->load->view('template/footer-login');

        if (isset($_POST['simpan'])) {
            $data = [
                'id_petugas' => $this->input->post('id_petugas'),
                'nama' => $this->input->post('nama'),
                'umur' => $this->input->post('umur'),
                'no_hp' => $this->input->post('no_hp'),
                'alamat' => $this->input->post('alamat'),
                'level' => $this->input->post('level'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            ];

            $this->m_login->addRegister($data);
            redirect('login/index');
        }
    }
}