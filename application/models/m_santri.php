<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_santri extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_santri');
    }
    public function input_data($data)
    {
        $this->db->insert('tb_santri', $data);
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
    public function detail_data($id_santri = NULL)
    {
        $query = $this->db->get_where('tb_santri', array('id_santri' => $id_santri))->row();
        return $query;
    }
}
