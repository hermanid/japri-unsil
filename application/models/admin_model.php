<?php
class Admin_model extends CI_Model
{
    public function getAllAdmin()
    {
        return $this->db->order_by('nama', 'ASC')->get('admin')->result_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id_admin' => $id])->row_array();
    }

    public function getAdminByNama($nama)
    {
        return $this->db->get_where('admin', ['username' => $nama])->row_array();
    }
    public function addAdmin()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'alamat' => $this->input->post('alamat'),
            'piutang' => $this->input->post('piutang'),
            'bagihasil' => $this->input->post('bagihasil'),
            'keterangan' => $this->input->post('keterangan')
        ];

        $this->db->insert('admin', $data);
    }

    public function bonusAdmin($id, $bonus)
    {
        $data = [
            'bonus' => $bonus
        ];

        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }

    public function editAdmin($id)
    {
        $data = [
            'nama' => $this->input->post('nama'),
        ];

        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }

    public function deleteAdmin($id)
    {
        return $this->db->delete('admin', ['id_admin' => $id]);
    }

    function search_admin($title)
    {
        $this->db->like('nama', $title, 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('admin')->result();
    }
}
