<?php
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('J_jabatan');

        if (!$this->session->userdata('id_user')) {
            redirect('Auth/index');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Data Jabatan';
        $data['jabatan'] = $this->J_jabatan->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer');
    }
    public function jabatan()
    {
        $data['title'] = 'Halaman Data Jabatan';
        $data['jabatan'] = $this->J_jabatan->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Jabatan';
        $data['jabatan'] = $this->J_jabatan->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/tambah_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->J_jabatan->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Baru Berhasil Ditambahkan!
      </div>');
        redirect('Home');
    }
    public function hapus_data($id_jabatan)
    {
        $this->load->model('J_jabatan');
        $this->J_jabatan->hapus_data($id_jabatan);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('Home');
    }
    public function edit_data($id_jabatan)
    {
        $data['title'] = 'Halaman Edit Jabatan';
        $data['tbl_jabatan'] = $this->J_jabatan->ambil_id_jabatan($id_jabatan);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->J_jabatan->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home');
    }
    
    public function editdata($id_jabatan)
    {
        $this->load->model('J_jabatan');
        $this->J_jabatan->edit_data($id_jabatan);
        redirect('Home');
    }
    public function beranda()
    {
        $this->load->view('templates/header1' );
        $this->load->view('templates/sidebar');
        $this->load->view('templates/beranda');
        $this->load->view('templates/topbar');
       
    }
}
?>