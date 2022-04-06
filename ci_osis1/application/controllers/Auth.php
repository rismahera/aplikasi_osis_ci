<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('A_anggota', 'agt');
    }
    public function index()
    {
        $this->load->view('Auth/Login');
    }
    public function proses_login()
    {
        $hasilcek = $this->agt->cekuser();

        if ($hasilcek) {
            $sess_data['id_user'] = $hasilcek[0]->id_user;
            $sess_data['level']   = $hasilcek[0]->level;
            $sess_data['email']   = $hasilcek[0]->email;

            $this->session->set_userdata($sess_data);
            if ($sess_data['level'] == 'admin') {
                redirect(base_url('Auth/beranda'));
            } else {
                redirect(base_url('Auth/beranda'));
            }
        } else {
            redirect('/');
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth');
    }
    public function beranda()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/beranda');
        $this->load->view('templates/topbar');
    }
}
