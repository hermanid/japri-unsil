<?php
class Crew_model extends CI_Model
{
    public function getAllCrew()
    {
        return $this->db->get('crew')->result_array();
    }

    public function getCrewById($id)
    {
        return $this->db->get_where('crew', ['id_crew' => $id])->row_array();
    }

    public function addCrew()
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

        $this->db->insert('crew', $data);
    }

    public function editCrew($id)
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

        $this->db->where('id_crew', $id);
        $this->db->update('crew', $data);
    }

    public function deleteCrew($id)
    {
        return $this->db->delete('crew', ['id_crew' => $id]);
    }

    function search_crew($title)
    {
        $this->db->like('nama', $title, 'both');
        $this->db->order_by('nama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('crew')->result();
    }
}
