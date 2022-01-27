<?php
defined('BASEPATH') or exit('No direct script access allowed');

class guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_guru');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['guru'] = $this->m_guru->tampil_data()->result();

        $data2['title'] = 'Data Guru';
        $this->load->view('templates/header', $data2);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/table_guru', $data1);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_aksi()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama_guru' => $this->input->post('nama_guru'),
            'ttl' => $this->input->post('ttl'),
            'alamat' => $this->input->post('alamat'),
            'jeniskelamin' => $this->input->post('jeniskelamin'),
            'tlp' => $this->input->post('tlp'),
            'email' => $this->input->post('email'),

        ];
        $this->m_guru->input_data($data, 'tb_guru');
        redirect('guru/index');
    }
    public function hapus($id_guru)
    {
        $where = array('id_guru' => $id_guru);
        $this->m_guru->hapus_data($where, 'tb_guru');
        redirect('guru/index');
    }
    public function edit($id_guru)
    {
        $where = array('id_guru' => $id_guru);
        $data['guru'] = $this->m_guru->edit_data($where, 'tb_guru')->result();


        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['guru'] = $this->m_guru->tampil_data()->result();
        $data['title'] = 'Data Guru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/edit_guru', $data);
        $this->load->view('templates/footer', $data);
    }
    public function update()
    {
        $id_guru = $this->input->post('id_guru');
        $nip = $this->input->post('nip');
        $nama_guru = $this->input->post('nama_guru');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $jeniskelamin = $this->input->post('jeniskelamin');
        $tlp = $this->input->post('tlp');
        $email = $this->input->post('email');

        $data = [
            'nip' => $nip,
            'nama_guru' => $nama_guru,
            'ttl' => $ttl,
            'alamat' => $alamat,
            'jeniskelamin' => $jeniskelamin,
            'tlp' => $tlp,
            'email' => $email,
        ];
        $where = array(
            'id_guru' => $id_guru
        );
        $this->m_guru->update_data($where, $data, 'tb_guru');
        redirect('guru/index');
    }
    public function detail($id_guru)
    {
        $this->load->model('m_guru');
        $detail = $this->m_guru->detail_data($id_guru);
        $data2['detail'] = $detail;

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['guru'] = $this->m_guru->tampil_data()->result();
        $data['title'] = 'Data Guru';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('santri/detail_guru', $data2);
        $this->load->view('templates/footer', $data);
    }
}
