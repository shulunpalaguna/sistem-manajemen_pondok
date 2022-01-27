<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_spp extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_spp');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas=tb_spp.id_spp');
        $query = $this->db->get();
        return $query->result();
    }

    public function edit_data()
    {
        $this->db->select('*');
        $this->db->from('tb_spp');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas=tb_spp.id_spp');
        $query = $this->db->get();
        return $query->result();
    }
}
