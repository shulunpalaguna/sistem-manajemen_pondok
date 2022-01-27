<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_guru extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_guru');
    }
    public function input_data($data)
    {
        $this->db->insert('tb_guru', $data);
    }
    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function detail_data($id_guru = NULL)
    {
        $query = $this->db->get_where('tb_guru', array('id_guru' => $id_guru))->row();
        return $query;
    }
}
