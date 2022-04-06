<?php
class Home1 extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('A_anggota');

        if (!$this->session->userdata('id_user')) {
            redirect('Auth/index');
        }
    }
    public function index()
    {
        $data['title'] = 'Halaman Data Anggota';
        $data['anggota'] = $this->A_anggota->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index1', $data);
        $this->load->view('templates/footer');
    }
    public function anggota()
    {
        $data['title'] = 'Halaman Data Anggota';
        $data['anggota'] = $this->A_anggota->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/index1', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_data()
    {
        $data['title'] = 'Halaman Tambah Anggota';
        $data['anggota'] = $this->A_anggota->SemuaData();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home1/tambah_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_tambah_data()
    {
        $this->A_anggota->proses_tambah_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan!
      </div>');
      redirect('Home1');

        //deklarasi variabel
        $nama_anggota = $this->input->post('nama_anggota');
        $alamat = $this->input->post('alamat');
        $kelas = $this->input->post('kelas');
        $tempat_tanggal_lahir = $this->input->post('tempat_tanggal_lahir');
        $no_hp = $this->input->post('no_hp');
        $program_keahlian = $this->input->post('program_keahlian');
        $jabatan = $this->input->post('jabatan');
        $tahun_masa_khidmat = $this->input->post('tahun_masa_khidmat');

        //proses upload
        $config['upload_path'] = "./foto/";
        $config['allowed_types'] = 'jpeg|jpg|png';
        $config['max_size'] = 500;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')){
            //jika gagal upload
            $data = array(
            'nama_anggota' => $nama_anggota,
            'alamat' => $alamat,
            'kelas' => $kelas,
            'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
            'no_hp' => $no_hp,
            'program_keahlian' => $program_keahlian,
            'jabatan' => $jabatan,
            'tahun_masa_khidmat' => $tahun_masa_khidmat,
            );
            $this->db->insert('tbl_anggota', $data);

            redirect('Auth/Home1');

        }else{
            //proses upload ke folder
            $data = array('upload_data' => $this->upload->data());
            $namafile = $this->upload->data("file_name");

            //update ke database
            $data= array(
            'nama_anggota' => $nama_anggota,
            'alamat' => $alamat,
            'kelas' => $kelas,
            'tempat_tanggal_lahir' => $tempat_tanggal_lahir,
            'no_hp' => $no_hp,
            'program_keahlian' => $program_keahlian,
            'jabatan' => $jabatan,
            'tahun_masa_khidmat' => $tahun_masa_khidmat,
            'foto' => $namafile
            );
            $this->db->insert('tbl_anggota', $data);
            redirect('Auth/Home1');
        }
    }
    public function hapus_data($id_anggota)
    {
        $this->load->model('A_anggota');
        $this->A_anggota->hapus_data($id_anggota);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        Data Berhasil Dihapus!
      </div>');
        redirect('Home1');
    }
    public function edit_data($id_anggota)
    {
        $data['title'] = 'Halaman Edit Anggota';
        $data['tbl_anggota'] = $this->A_anggota->ambil_id_anggota($id_anggota);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home1/edit_data', $data);
        $this->load->view('templates/footer');
    }
    public function proses_edit_data()
    {
        $this->A_anggota->proses_edit_data();
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Data Berhasil Diedit!
      </div>');
        redirect('Home1');
    }
    
    public function editdata($id_anggota)
    {
        $this->load->model('A_anggota');
        $this->A_anggota->edit_data($id_anggota);
        redirect('Home1');
    }
}
?>