<?php
class U_user extends CI_Model{
    public function SemuaData()
    {
    return $this->db->get('tbl_user')->result_array();
    }
    public function proses_tambah_data()
    {
       $data = [
          "username"    => $this->input->post('username'),
          "password"    => $this->input->post('password'),
          "email"       => $this->input->post('email'),
          "level"       => $this->input->post('level'),
       ];
       $this->db->insert('tbl_user',$data);
    }
    public function hapus_data($id_user)
    {
       $this->db->where('id_user', $id_user);
       $this->db->delete('tbl_user');
    }
    public function ambil_id_user($id_user)
    {
       return $this->db->get_where('tbl_user', ['id_user' => $id_user])->row_array();
    }
    public function proses_edit_data()
    {
       $data = [
        "username"      => $this->input->post('username'),
        "password"      => $this->input->post('password'),
        "email"         => $this->input->post('email'),
        "level"         => $this->input->post('level'),
       ];
       $this->db->where('id_user', $this->input->post('id_user'));
       $this->db->update('tbl_user', $data);
    }

}
?>