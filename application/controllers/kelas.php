<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kelas');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['kelas'] = $this->m_kelas->tampil_data();

        $data2['title'] = 'Data kelas';
        $this->load->view('templates/header', $data2);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/table_kelas', $data1);
        $this->load->view('templates/footer', $data);
    }
    public function edit($id_kelas)
    {
        $where = array('id_kelas' => $id_kelas);
        $data['kelas'] = $this->m_kelas->edit_data();

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['kelas'] = $this->m_kelas->tampil_data();
        $data['title'] = 'Data Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/edit_kelas', $data);
        $this->load->view('templates/footer', $data);
    }
    public function update()
    {
        $id_kelas = $this->input->post('id_kelas');
        $nama_guru = $this->input->post('nama_guru');

        $result = array();
        foreach ($id_kelas as $key => $val) {
            $result[] = array(
                'id_kelas' => $id_kelas[$key],
                'nama_guru' => $nama_guru[$key]
            );
        }
        $this->db->update_batch('tb_kelas', $result, 'id_kelas');
        redirect('kelas/index');
    }
}
