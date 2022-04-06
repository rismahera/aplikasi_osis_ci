<?php
class Home4 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('U_user');

        if (!$this->session->userdata('id_user')) {
            redirect('Auth/index');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Data User';
        $data['user'] = $this->U_user->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index4', $data);
        $this->load->view('templates/footer');
    }
    public function user()
    {
        $data['title'] = 'Halaman Data User';
        $data['user'] = $this->U_user->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index4', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah User';
        $data['user'] = $this->U_user->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home4/tambah_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->U_user->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Baru Berhasil Ditambahkan!
      </div>');
        redirect('Home4');
    }
    public function hapus_data($id_user)
    {
        $this->load->model('U_user');
        $this->U_user->hapus_data($id_user);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('Home4');
    }
    public function edit_data($id_user)
    {
        $data['title'] = 'Halaman Edit User';
        $data['tbl_user'] = $this->U_user->ambil_id_user($id_user);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home4/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->U_user->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home4');
    }

    public function editdata($id_user)
    {
        $this->load->model('U_user');
        $this->U_user->edit_data($id_user);
        redirect('Home4');
    }
}
