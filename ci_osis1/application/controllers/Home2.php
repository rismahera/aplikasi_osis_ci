<?php
class Home2 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('T_tahun');

        if (!$this->session->userdata('id_user')) {
            redirect('Auth/index');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Data Tahun';
        $data['tahun'] = $this->T_tahun->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index2', $data);
        $this->load->view('templates/footer');
    }
    public function tahun()
    {
        $data['title'] = 'Halaman Data Tahun';
        $data['tahun'] = $this->T_tahun->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index2', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Tahun';
        $data['tahun'] = $this->T_tahun->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home2/tambah_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->T_tahun->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Baru Berhasil Ditambahkan!
      </div>');
        redirect('Home2');
    }
    public function hapus_data($id_tahun)
    {
        $this->load->model('T_tahun');
        $this->T_tahun->hapus_data($id_tahun);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('Home2');
    }
    public function edit_data($id_tahun)
    {
        $data['title'] = 'Halaman Edit Tahun';
        $data['tbl_tahun'] = $this->T_tahun->ambil_id_tahun($id_tahun);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home2/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->T_tahun->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home2');
    }
    
    public function editdata($id_tahun)
    {
        $this->load->model('T_tahun');
        $this->T_tahun->edit_data($id_tahun);
        redirect('Home2');
    }
}
?>