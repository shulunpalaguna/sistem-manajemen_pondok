<?php
defined('BASEPATH') or exit('No direct script access allowed');

class santri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_santri');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['santri'] = $this->m_santri->tampil_data()->result();

        $data2['title'] = 'Data Santri';
        $this->load->view('templates/header', $data2);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/table_santri', $data1);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_aksi()
    {
        $data = [
            'nis' => $this->input->post('nis'),
            'nisn' => $this->input->post('nisn'),
            'nama_santri' => $this->input->post('nama_santri'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'tlp' => $this->input->post('tlp'),
            'nama_ortu' => $this->input->post('nama_ortu'),
            'email' => $this->input->post('email'),
            'status' => $this->input->post('status'),
        ];
        $this->m_santri->input_data($data, 'tb_santri');
        redirect('santri/index');
    }
    public function hapus($id_santri)
    {
        $where = array('id_santri' => $id_santri);
        $this->m_santri->hapus_data($where, 'tb_santri');
        redirect('santri/index');
    }
    public function edit($id_santri)
    {
        $where = array('id_santri' => $id_santri);
        $data['santri'] = $this->m_santri->edit_data($where, 'tb_santri')->result();


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['santri'] = $this->m_santri->tampil_data()->result();
        $data['title'] = 'Data Santri';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/edit', $data);
        $this->load->view('templates/footer', $data);
    }
    public function update()
    {
        $id_santri = $this->input->post('id_santri');
        $nis = $this->input->post('nis');
        $nisn = $this->input->post('nisn');
        $nama_santri = $this->input->post('nama_santri');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $tlp = $this->input->post('tlp');
        $nama_ortu = $this->input->post('nama_ortu');
        $email = $this->input->post('email');
        $status = $this->input->post('status');

        $data = [
            'nis' => $nis,
            'nisn' => $nisn,
            'nama_santri' => $nama_santri,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'jeniskelamin' => $jeniskelamin,
            'tlp' => $tlp,
            'nama_ortu' => $nama_ortu,
            'email' => $email,
            'status' => $status,
        ];
        $where = array(
            'id_santri' => $id_santri
        );
        $this->m_santri->update_data($where, $data, 'tb_santri');
        redirect('santri/index');
    }
    public function detail($id)
    {
        $this->load->model('m_santri');
        $detail = $this->m_santri->detail_data($id);
        $data2['detail'] = $detail;

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['santri'] = $this->m_santri->tampil_data()->result();
        $data['title'] = 'Data Santri';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/detail', $data2);
        $this->load->view('templates/footer', $data);
    }
}
