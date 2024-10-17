<?php

/**
 * Summary
 */
class Dosen_model extends CI_Model
{
    public function getAllDosen()
    {
        return $this->db->get('dosen')->result_array();
    }


    public function tambahDataDosen()
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "namadosen" => $this->input->post('namadosen', true),
        ];
        $this->db->insert('dosen', $data);
    }

    public function getDosenById($id)
    {
        return $this->db->get_where('dosen', ['id' => $id])->row_array();
    }


    public function cariDataDosen()
    {
        $keyword = $this->input->post('keyword', TRUE);
        $this->db->like('nip', $keyword);
        $this->db->or_like('namadosen', $keyword);
        return $this->db->get('dosen')->result_array();
    }

    public function ubahDataDosen($id)
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "namadosen" => $this->input->post('namadosen', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('dosen', $data);
    }

    public function hapusDataDosen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('dosen');
    }
}
