<?php
class J_jabatan extends CI_Model{
    public function SemuaData()
    {
    return $this->db->get('tbl_jabatan')->result_array();
    }
    public function proses_tambah_data()
    {
       $data = [
          "nama_jabatan" => $this->input->post('nama_jabatan'),
       ];
       $this->db->insert('tbl_jabatan',$data);
    }
    public function hapus_data($id_jabatan)
    {
       $this->db->where('id_jabatan', $id_jabatan);
       $this->db->delete('tbl_jabatan');
    }
    public function ambil_id_jabatan($id_jabatan)
    {
       return $this->db->get_where('tbl_jabatan', ['id_jabatan' => $id_jabatan])->row_array();
    }
    public function proses_edit_data()
    {
       $data = [
          "nama_jabatan" => $this->input->post('nama_jabatan'),
       ];
       $this->db->where('id_jabatan', $this->input->post('id_jabatan'));
       $this->db->update('tbl_jabatan', $data);
    }
}
?>