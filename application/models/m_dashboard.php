<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_dashboard extends CI_Model
{
    public function total_santri()
    {
        $query = $this->db->query('select * from tb_santri');
        $total = $query->num_rows();
        return $total;
    }
    public function total_guru()
    {
        $query = $this->db->query('select * from tb_guru');
        $total = $query->num_rows();
        return $total;
    }
    public function total_kelas()
    {
        $query = $this->db->query('select * from tb_kelas');
        $total = $query->num_rows();
        return $total;
    }
}
