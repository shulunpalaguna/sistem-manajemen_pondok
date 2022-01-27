<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_kelas extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->join('tb_guru', 'tb_guru.id_guru=tb_kelas.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }
    public function edit_data()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->join('tb_guru', 'tb_guru.id_guru=tb_kelas.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
